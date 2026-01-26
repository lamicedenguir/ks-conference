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

    header('Content-Type: image/jpeg');
    header('Content-Length: 1921');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
