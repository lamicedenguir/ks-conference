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
    header('Content-Length: 4391');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
