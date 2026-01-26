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
    header('Content-Length: 1842');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
