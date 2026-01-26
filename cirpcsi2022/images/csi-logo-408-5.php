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
            $redirect = 'cirpcsi2022openingandclosing.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '040443DF-8E29-4EEB-98EC-D750C46EC061';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022openingandclosing.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 3370');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
