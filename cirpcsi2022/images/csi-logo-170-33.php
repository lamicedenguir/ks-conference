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

    header('Content-Type: image/webp');
    header('Content-Length: 2010');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
