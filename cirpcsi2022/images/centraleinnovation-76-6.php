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
    header('Content-Length: 1917');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
