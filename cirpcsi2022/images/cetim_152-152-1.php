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
    header('Content-Length: 3614');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
