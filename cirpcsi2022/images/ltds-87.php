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
    header('Content-Length: 2816');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
