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
    header('Content-Length: 1694');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
