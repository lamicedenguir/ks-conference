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
    header('Content-Length: 2798');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
