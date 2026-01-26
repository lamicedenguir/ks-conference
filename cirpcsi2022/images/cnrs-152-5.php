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
    header('Content-Length: 3176');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
