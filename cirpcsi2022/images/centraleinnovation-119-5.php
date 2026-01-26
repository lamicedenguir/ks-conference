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
    header('Content-Length: 2112');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
