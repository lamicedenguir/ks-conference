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
    header('Content-Length: 3840');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
