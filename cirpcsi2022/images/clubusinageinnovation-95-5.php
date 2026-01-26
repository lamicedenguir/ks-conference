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
    header('Content-Length: 1882');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
