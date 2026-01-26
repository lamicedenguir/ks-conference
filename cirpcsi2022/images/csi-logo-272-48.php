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
    header('Content-Length: 4955');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
