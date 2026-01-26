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
    header('Content-Length: 4306');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
