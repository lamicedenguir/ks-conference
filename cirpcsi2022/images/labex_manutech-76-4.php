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
    header('Content-Length: 2176');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
