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

    header('Content-Type: image/jpeg');
    header('Content-Length: 2392');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
