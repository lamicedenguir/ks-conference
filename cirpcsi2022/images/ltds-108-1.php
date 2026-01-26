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
    header('Content-Length: 2616');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
