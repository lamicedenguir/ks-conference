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
    header('Content-Length: 2002');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
