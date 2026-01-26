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
    header('Content-Length: 3630');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
