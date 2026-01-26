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
    header('Content-Length: 1829');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
