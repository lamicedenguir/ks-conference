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
    header('Content-Length: 4620');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
