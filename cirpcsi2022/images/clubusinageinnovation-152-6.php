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
    header('Content-Length: 3880');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
