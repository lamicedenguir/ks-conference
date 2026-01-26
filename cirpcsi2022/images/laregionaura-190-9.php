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
    header('Content-Length: 3952');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
