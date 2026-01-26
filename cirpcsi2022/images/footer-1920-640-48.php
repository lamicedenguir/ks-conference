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
    header('Content-Length: 3038');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
