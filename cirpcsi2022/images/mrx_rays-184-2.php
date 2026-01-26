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

    header('Content-Type: image/jpeg');
    header('Content-Length: 4575');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
