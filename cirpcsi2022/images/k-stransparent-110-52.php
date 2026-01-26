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
    header('Content-Length: 4553');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
