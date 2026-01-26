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
    header('Content-Length: 1560');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
