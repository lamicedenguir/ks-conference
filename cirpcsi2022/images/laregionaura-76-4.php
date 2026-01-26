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
    header('Content-Length: 2057');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
