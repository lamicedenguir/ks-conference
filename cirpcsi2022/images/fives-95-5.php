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
    header('Content-Length: 2036');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
