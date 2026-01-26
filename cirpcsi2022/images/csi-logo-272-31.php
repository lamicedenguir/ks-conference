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
            $redirect = 'cirpcsi2022session1.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '8B63F4C2-8582-440F-AB5D-CF89DACED4DA';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session1.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 2830');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
