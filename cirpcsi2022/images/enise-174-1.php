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
    header('Content-Length: 3350');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
