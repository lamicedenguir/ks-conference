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
    header('Content-Length: 1986');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
