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

    header('Content-Type: image/jpeg');
    header('Content-Length: 3037');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
