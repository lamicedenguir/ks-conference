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
    header('Content-Length: 4330');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
