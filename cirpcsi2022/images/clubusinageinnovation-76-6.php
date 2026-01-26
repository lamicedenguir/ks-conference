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
    header('Content-Length: 2124');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
