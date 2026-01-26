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
    header('Content-Length: 4704');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
