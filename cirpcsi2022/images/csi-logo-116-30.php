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

    header('Content-Type: image/jpeg');
    header('Content-Length: 1924');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
