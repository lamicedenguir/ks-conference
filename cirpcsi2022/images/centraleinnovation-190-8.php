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
    header('Content-Length: 4423');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
