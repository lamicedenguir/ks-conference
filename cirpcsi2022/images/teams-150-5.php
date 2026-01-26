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
    header('Content-Length: 2440');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
