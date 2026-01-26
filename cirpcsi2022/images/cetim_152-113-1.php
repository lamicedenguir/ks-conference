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
    header('Content-Length: 2732');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
