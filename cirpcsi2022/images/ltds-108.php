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
    header('Content-Length: 4023');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
