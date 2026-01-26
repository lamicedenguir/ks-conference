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

    header('Content-Type: image/png');
    header('Content-Length: 2650');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
