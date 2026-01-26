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
            $redirect = 'cirpcsi2022session2-3.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '0B0D709B-FE71-4D06-AB4F-7E4B29B81FD6';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2-3.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/png');
    header('Content-Length: 3073');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
