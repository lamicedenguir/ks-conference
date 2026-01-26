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
    header('Content-Length: 1536');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
