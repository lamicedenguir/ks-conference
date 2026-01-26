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
    header('Content-Length: 4192');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
