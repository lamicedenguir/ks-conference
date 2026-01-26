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
    header('Content-Length: 3646');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
