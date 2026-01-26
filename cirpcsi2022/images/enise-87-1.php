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
    header('Content-Length: 1732');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
