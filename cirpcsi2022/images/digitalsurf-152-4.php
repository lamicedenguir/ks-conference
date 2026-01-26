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
    header('Content-Length: 3079');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
