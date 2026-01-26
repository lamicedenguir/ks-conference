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
    header('Content-Length: 2350');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
