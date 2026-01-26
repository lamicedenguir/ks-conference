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
    header('Content-Length: 4928');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
