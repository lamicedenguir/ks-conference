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
            $redirect = 'thankyou.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = 'B66AF5DE-1806-4436-94E7-1A134DBBEAD2';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'thankyou.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 3390');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
