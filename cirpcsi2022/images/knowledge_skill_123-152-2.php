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
    header('Content-Length: 4116');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
