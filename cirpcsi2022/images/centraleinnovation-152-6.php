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
    header('Content-Length: 3400');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
