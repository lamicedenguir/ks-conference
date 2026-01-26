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
    header('Content-Length: 2594');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
