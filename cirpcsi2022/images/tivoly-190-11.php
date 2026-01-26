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
    header('Content-Length: 3912');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
