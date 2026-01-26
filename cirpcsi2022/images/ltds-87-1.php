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
    header('Content-Length: 1922');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
