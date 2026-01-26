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
            $redirect = 'cirpcsi2022.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '0D189E10-AE4D-46C7-9718-F7A414167756';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 3740');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
