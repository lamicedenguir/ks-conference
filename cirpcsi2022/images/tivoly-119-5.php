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
    header('Content-Length: 2418');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
