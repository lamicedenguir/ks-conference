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
    header('Content-Length: 3038');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
