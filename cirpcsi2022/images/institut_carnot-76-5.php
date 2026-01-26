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
