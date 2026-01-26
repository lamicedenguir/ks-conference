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
    header('Content-Length: 4041');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
