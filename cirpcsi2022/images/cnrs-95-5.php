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
    header('Content-Length: 2352');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
