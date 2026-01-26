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
    header('Content-Length: 2626');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
