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
    header('Content-Length: 2502');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
