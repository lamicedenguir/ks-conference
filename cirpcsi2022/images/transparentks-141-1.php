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
    header('Content-Length: 4330');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
