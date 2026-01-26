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
            $redirect = 'cirpcsi2022keynotes.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = 'FE465256-5B59-459E-BDA0-7DB5ECCDD388';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022keynotes.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 2570');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
