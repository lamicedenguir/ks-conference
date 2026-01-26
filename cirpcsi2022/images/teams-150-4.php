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

    header('Content-Type: image/png');
    header('Content-Length: 4188');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
