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
    header('Content-Length: 2878');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
