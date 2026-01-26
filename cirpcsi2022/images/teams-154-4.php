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

    header('Content-Type: image/png');
    header('Content-Length: 4343');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
