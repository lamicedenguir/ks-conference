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
    header('Content-Length: 3670');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
