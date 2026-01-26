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
    header('Content-Length: 2576');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
