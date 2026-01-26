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
    header('Content-Length: 1552');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
