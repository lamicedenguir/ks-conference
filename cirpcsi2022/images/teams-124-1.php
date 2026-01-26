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
    header('Content-Length: 2072');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
