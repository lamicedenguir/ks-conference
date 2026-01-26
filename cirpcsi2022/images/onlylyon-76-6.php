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
    header('Content-Length: 2053');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
