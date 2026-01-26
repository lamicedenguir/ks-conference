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
    header('Content-Length: 4180');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
