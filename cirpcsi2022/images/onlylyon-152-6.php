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
    header('Content-Length: 3555');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
