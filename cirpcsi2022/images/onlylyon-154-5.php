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
    header('Content-Length: 3076');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
