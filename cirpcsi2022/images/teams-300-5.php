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
    header('Content-Length: 4348');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
