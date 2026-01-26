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
    header('Content-Length: 1974');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
