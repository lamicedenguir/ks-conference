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
    header('Content-Length: 2238');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
