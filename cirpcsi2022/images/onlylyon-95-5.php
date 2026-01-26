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
    header('Content-Length: 1798');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
