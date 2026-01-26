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
            $redirect = 'cirpcsi2022session2-4.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = 'E5E28EF9-A686-4D92-9D1B-CF050BD4FA8A';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2-4.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 3426');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
