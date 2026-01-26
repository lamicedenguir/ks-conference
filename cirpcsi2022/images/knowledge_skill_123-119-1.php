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
    header('Content-Length: 2648');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
