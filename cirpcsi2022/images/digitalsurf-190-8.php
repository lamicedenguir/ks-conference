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
    header('Content-Length: 3948');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
