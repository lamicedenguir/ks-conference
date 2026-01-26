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
            $redirect = 'cirpcsi2022session3.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '417E1E71-AB87-49CE-BB12-6B6549E2FD3F';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session3.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 3172');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
