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
    header('Content-Length: 1744');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
