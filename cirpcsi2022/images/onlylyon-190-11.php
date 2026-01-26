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
    header('Content-Length: 4058');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
