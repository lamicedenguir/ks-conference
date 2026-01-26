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
    header('Content-Length: 4872');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
