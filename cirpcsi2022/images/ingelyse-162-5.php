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
    header('Content-Length: 4332');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
