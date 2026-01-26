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
    header('Content-Length: 4349');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
