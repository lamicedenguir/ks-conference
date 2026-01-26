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
    header('Content-Length: 1988');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
