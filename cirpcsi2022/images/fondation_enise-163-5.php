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
