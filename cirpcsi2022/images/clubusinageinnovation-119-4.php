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
    header('Content-Length: 3959');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
