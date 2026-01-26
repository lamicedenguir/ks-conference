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

    header('Content-Type: image/webp');
    header('Content-Length: 2602');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
