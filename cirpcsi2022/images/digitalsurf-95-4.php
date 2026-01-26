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
    header('Content-Length: 2413');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
