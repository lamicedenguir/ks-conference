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
    header('Content-Length: 2630');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
