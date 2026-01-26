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
    header('Content-Length: 1728');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
