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
    header('Content-Length: 2565');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
