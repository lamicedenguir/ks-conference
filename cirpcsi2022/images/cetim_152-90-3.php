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
    header('Content-Length: 2108');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
