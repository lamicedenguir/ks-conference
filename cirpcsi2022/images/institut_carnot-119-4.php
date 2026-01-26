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
    header('Content-Length: 4246');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
