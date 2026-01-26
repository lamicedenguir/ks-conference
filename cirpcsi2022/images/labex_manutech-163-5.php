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
    header('Content-Length: 3728');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
