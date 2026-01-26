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
    header('Content-Length: 2901');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
