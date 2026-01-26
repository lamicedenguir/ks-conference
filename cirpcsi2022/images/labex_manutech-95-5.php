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
    header('Content-Length: 1946');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
