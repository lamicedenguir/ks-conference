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
    header('Content-Length: 2121');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
