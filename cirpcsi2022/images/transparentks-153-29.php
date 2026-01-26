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
    header('Content-Length: 4950');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
