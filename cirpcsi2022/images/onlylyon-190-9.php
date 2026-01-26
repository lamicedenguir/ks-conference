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
    header('Content-Length: 3462');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
