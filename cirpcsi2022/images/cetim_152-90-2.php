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
    header('Content-Length: 3015');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
