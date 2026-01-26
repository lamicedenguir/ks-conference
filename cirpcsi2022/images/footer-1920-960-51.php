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

    header('Content-Type: image/webp');
    header('Content-Length: 4342');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
