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
    header('Content-Length: 3350');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
