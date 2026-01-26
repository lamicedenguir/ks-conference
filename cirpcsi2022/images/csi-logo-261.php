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
    header('Content-Length: 3255');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
