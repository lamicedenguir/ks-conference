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
            $redirect = 'search.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '_Sparkle_Site_Search_Page_';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'search.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/jpeg');
    header('Content-Length: 2621');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
