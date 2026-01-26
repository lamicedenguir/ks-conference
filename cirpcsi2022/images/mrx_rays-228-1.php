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
    header('Content-Length: 3580');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
