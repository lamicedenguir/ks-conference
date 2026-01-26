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

    header('Content-Type: image/jpeg');
    header('Content-Length: 4739');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
