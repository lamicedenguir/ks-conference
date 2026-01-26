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
    header('Content-Length: 3502');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
