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
    header('Content-Length: 2895');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
