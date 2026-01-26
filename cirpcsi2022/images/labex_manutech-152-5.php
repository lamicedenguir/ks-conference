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
    header('Content-Length: 2862');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
