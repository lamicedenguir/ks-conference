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
    header('Content-Length: 4338');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
