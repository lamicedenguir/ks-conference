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
    header('Content-Length: 2324');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
