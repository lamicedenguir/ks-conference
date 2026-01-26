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

    header('Content-Type: image/jpeg');
    header('Content-Length: 1925');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
