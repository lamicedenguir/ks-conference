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
    header('Content-Length: 3696');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
