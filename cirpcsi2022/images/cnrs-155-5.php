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
    header('Content-Length: 3988');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
