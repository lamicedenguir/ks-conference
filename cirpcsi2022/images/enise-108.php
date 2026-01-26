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
    header('Content-Length: 3476');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
