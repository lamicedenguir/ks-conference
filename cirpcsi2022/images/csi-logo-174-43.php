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
    header('Content-Length: 1788');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
