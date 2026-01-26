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
    header('Content-Length: 2054');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
