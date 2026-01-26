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
    header('Content-Length: 3999');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
