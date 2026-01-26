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
    header('Content-Length: 3401');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
