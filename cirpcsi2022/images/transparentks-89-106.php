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

    header('Content-Type: image/png');
    header('Content-Length: 4319');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
