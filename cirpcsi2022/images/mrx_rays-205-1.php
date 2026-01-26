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
    header('Content-Length: 3814');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
