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
    header('Content-Length: 4841');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
