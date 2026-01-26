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
    header('Content-Length: 4932');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
