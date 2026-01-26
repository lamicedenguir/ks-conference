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
    header('Content-Length: 2274');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
