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
    header('Content-Length: 2708');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
