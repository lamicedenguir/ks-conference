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
    header('Content-Length: 4238');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
