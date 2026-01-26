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
    header('Content-Length: 2428');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
