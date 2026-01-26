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
    header('Content-Length: 3493');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
