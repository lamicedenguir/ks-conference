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

    header('Content-Type: image/webp');
    header('Content-Length: 2944');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
