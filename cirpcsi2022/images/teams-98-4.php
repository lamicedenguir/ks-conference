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
    header('Content-Length: 2832');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
