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
    header('Content-Length: 3187');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
