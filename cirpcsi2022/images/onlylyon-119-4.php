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
    header('Content-Length: 3741');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
