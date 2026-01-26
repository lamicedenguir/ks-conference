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
