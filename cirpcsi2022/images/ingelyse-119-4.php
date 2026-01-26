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
    header('Content-Length: 4684');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
