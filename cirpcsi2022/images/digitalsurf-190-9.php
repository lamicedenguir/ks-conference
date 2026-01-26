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
    header('Content-Length: 2664');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
