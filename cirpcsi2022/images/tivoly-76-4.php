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
    header('Content-Length: 2210');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
