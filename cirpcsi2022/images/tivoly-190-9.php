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
    header('Content-Length: 3286');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
