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
    header('Content-Length: 2572');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
