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
    header('Content-Length: 2082');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
