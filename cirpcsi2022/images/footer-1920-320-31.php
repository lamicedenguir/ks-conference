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
    header('Content-Length: 1656');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
