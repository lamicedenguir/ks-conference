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
    header('Content-Length: 1582');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
