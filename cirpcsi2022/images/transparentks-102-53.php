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
    header('Content-Length: 3028');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
