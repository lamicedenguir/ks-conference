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
    header('Content-Length: 2780');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
