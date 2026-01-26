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
    header('Content-Length: 2171');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
