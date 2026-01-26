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
    header('Content-Length: 2808');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
