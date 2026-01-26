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
    header('Content-Length: 3315');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
