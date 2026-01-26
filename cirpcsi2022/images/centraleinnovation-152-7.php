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
    header('Content-Length: 2326');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
