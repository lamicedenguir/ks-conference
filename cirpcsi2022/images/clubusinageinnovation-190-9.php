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
    header('Content-Length: 3726');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
