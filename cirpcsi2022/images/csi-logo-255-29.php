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
            $redirect = 'myvote.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = 'FAABCB4D-B15C-439E-A034-6F511CA61AD8';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'myvote.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 2350');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
