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
    header('Content-Length: 3132');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
