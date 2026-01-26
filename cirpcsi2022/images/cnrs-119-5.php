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
    header('Content-Length: 3018');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
