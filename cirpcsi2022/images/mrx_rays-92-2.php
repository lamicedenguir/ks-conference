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
    header('Content-Length: 2548');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
