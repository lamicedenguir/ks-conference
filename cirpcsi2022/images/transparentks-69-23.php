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
    header('Content-Length: 1884');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
