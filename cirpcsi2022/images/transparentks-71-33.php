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
    header('Content-Length: 1956');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
