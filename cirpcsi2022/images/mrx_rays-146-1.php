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
            $redirect = 'cirpcsi2022.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '0D189E10-AE4D-46C7-9718-F7A414167756';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 2570');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
