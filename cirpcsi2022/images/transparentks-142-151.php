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
    header('Content-Length: 4500');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
