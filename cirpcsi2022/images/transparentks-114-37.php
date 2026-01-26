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
    header('Content-Length: 3606');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
