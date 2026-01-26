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

    header('Content-Type: image/png');
    header('Content-Length: 3531');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
