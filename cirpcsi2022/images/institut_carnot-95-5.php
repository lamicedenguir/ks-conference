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
    header('Content-Length: 2134');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
