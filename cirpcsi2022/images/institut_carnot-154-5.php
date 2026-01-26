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
    header('Content-Length: 3746');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
