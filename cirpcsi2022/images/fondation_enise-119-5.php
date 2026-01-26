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
    header('Content-Length: 2562');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
