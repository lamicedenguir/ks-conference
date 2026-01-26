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
    header('Content-Length: 2694');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
