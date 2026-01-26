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
    header('Content-Length: 1516');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
