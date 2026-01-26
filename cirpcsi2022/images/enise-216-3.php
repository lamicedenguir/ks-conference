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
    header('Content-Length: 4254');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
