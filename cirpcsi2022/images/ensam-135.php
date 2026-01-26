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
    header('Content-Length: 4850');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
