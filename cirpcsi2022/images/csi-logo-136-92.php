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
    header('Content-Length: 1646');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
