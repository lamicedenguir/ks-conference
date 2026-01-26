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
    header('Content-Length: 3108');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
