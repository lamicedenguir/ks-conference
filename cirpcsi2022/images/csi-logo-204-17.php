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
            $redirect = 'cirpcsi2022session2-2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = 'C99C4A43-39DD-4105-AC3A-3EA4F8E78864';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2-2.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 1952');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
