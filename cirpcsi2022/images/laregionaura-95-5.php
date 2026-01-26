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
    header('Content-Length: 1968');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
