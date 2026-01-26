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
    header('Content-Length: 2726');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
