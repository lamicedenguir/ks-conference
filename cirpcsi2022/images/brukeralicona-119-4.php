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
    header('Content-Length: 3653');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
