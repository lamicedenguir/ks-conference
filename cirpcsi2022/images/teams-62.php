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
    header('Content-Length: 1801');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
