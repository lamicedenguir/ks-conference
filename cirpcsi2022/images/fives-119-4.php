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
    header('Content-Length: 4228');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
