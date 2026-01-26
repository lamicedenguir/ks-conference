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
    header('Content-Length: 3032');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
