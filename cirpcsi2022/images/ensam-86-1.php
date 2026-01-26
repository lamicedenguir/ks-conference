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
    header('Content-Length: 1668');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
