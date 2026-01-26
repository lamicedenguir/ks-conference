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
    header('Content-Length: 2186');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
