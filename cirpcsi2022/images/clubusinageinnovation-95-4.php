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
    header('Content-Length: 2759');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
