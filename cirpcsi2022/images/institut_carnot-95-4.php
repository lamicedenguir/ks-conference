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
    header('Content-Length: 3238');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
