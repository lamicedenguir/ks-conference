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
            $redirect = 'cirpcsi2022session1-2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '778B88A4-F538-45F1-ACEC-5507EB242323';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session1-2.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 2810');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
