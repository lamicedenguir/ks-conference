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
    header('Content-Length: 3512');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
