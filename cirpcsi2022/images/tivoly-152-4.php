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
    header('Content-Length: 3812');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
