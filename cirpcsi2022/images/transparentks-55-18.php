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
    header('Content-Length: 2351');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
