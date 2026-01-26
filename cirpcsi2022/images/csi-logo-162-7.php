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
    header('Content-Length: 1668');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
