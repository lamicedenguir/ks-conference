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
    header('Content-Length: 2552');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
