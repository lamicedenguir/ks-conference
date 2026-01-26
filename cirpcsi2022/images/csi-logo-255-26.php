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
            $redirect = 'votes.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = 'CF5714A3-7FC2-449D-B5F4-5F06269959B0';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'votes.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/jpeg');
    header('Content-Length: 3174');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
