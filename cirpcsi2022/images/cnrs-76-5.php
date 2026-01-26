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
    header('Content-Length: 1812');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
