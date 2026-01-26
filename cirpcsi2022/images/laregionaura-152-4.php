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
    header('Content-Length: 3874');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
