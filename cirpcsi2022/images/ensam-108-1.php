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
    header('Content-Length: 2150');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
