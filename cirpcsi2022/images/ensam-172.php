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
    header('Content-Length: 4407');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
