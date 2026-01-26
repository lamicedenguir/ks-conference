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

    header('Content-Type: image/jpeg');
    header('Content-Length: 1886');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
