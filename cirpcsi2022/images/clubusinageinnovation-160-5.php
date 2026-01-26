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
    header('Content-Length: 3598');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
