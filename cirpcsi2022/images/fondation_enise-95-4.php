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
    header('Content-Length: 2962');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
