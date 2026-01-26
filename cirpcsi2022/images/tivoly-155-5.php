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
    header('Content-Length: 3082');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
