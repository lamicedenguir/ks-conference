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

    header('Content-Type: image/webp');
    header('Content-Length: 3910');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
