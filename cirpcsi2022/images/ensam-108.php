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
    header('Content-Length: 3397');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
