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
    header('Content-Length: 2384');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
