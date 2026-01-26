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
    header('Content-Length: 3422');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
