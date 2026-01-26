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

    header('Content-Type: image/jpeg');
    header('Content-Length: 3781');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
