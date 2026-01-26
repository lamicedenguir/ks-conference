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
    header('Content-Length: 3268');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
