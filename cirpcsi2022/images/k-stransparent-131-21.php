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
    header('Content-Length: 4294');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
