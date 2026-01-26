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
    header('Content-Length: 4507');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
