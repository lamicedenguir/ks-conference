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
    header('Content-Length: 1962');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
