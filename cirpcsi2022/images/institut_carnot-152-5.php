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
    header('Content-Length: 3094');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
