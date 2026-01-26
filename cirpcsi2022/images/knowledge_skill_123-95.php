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
    header('Content-Length: 3164');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
