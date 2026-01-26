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
    header('Content-Length: 3498');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
