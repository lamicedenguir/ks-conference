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
            $redirect = 'cirpcsi2022session2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = 'C2F10598-BE8C-4EA7-8CF8-E110759F3266';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/jpeg');
    header('Content-Length: 2198');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
