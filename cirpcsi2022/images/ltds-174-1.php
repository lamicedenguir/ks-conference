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
    header('Content-Length: 3906');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
