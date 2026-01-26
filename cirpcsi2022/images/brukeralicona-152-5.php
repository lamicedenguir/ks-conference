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
    header('Content-Length: 2594');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
