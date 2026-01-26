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
    header('Content-Length: 2328');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
