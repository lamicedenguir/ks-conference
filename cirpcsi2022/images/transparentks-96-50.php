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

    header('Content-Type: image/png');
    header('Content-Length: 4735');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
