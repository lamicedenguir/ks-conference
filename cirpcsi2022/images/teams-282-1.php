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
    header('Content-Length: 4084');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
