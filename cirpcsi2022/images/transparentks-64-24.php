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

    header('Content-Type: image/png');
    header('Content-Length: 2817');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
