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
    header('Content-Length: 4396');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
