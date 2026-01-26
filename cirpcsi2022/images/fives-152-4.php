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
    header('Content-Length: 3945');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
