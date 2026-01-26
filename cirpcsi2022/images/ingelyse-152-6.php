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
    header('Content-Length: 4408');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
