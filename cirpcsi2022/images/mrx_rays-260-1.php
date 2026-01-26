<?php
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    session_start();
    include '../groups-415c8e.php';
    function checkAccess($groups) {
        if(isset($_SESSION['user_groups'])) {
            return count(array_intersect($groups, $_SESSION['user_groups'])) > 0;
        }
        return FALSE;
    }
    if(isset($_SESSION['user_logged']) && 8 > 0) {
        $now = new DateTime();
        $fmt = "Y-m-d\TH:i:sP"; // ATOM
        $end = DateTime::createFromFormat($fmt, $_SESSION['user_logged']->format($fmt));
        $end->add(new DateInterval("PT8H"));
        $diff = $now->diff($end);
        if($diff->invert) {
            $redirect = 'cirpcsi2022.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '0D189E10-AE4D-46C7-9718-F7A414167756';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 4858');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
