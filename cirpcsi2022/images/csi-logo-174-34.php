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

    header('Content-Type: image/jpeg');
    header('Content-Length: 2961');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
