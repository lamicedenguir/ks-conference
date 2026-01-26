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

    header('Content-Type: image/webp');
    header('Content-Length: 2486');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
