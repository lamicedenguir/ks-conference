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
    header('Content-Length: 4028');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
