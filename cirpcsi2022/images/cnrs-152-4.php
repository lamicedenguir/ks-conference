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
    header('Content-Length: 4637');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
