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
    header('Content-Length: 3810');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
