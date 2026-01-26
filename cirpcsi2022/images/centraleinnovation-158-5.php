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
    header('Content-Length: 2876');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
