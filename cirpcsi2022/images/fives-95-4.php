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
    header('Content-Length: 3014');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
