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
    header('Content-Length: 3552');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
