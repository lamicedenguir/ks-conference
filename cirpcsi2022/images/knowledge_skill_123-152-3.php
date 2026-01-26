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
    header('Content-Length: 2950');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
