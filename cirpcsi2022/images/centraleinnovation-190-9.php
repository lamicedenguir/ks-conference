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
    header('Content-Length: 3150');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
