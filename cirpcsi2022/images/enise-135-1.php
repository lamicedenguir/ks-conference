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
    header('Content-Length: 3102');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
