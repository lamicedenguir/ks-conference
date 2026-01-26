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
            $redirect = 'cirpcsi2022session1-3.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '9EDCC975-A833-4296-80F5-2337B855710F';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session1-3.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 2400');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
