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
    header('Content-Length: 1702');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
