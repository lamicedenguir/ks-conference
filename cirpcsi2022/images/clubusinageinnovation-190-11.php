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
    header('Content-Length: 4392');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
