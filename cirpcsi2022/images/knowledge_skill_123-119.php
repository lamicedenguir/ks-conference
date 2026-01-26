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
    header('Content-Length: 4286');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
