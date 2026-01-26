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
    header('Content-Length: 4614');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
