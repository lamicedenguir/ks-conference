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
    header('Content-Length: 2771');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
