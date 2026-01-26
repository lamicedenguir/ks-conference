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
    header('Content-Length: 3572');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
