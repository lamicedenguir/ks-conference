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
    header('Content-Length: 3606');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
