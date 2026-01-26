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

    header('Content-Type: image/png');
    header('Content-Length: 4091');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
