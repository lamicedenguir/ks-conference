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

    header('Content-Type: image/jpeg');
    header('Content-Length: 3939');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
