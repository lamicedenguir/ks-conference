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
    header('Content-Length: 4046');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
