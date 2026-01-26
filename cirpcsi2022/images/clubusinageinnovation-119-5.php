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
    header('Content-Length: 2554');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
