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

    header('Content-Type: image/jpeg');
    header('Content-Length: 4897');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
