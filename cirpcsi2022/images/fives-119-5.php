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
    header('Content-Length: 2652');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
