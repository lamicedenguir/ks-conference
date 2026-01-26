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
    header('Content-Length: 4734');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
