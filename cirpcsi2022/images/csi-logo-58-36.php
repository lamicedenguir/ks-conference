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
            $redirect = 'cirpcsi2022session1-2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '778B88A4-F538-45F1-ACEC-5507EB242323';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session1-2.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 864');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRlgDAABXRUJQVlA4WAoAAAAQAAAAOQAAFAAAQUxQSBQAAAABDzD/ERFCTJpg/9Br4B3R/wD0B1ZQOCAeAwAA0BAAnQEqOgAVAD4xFolDIiEhFAwFVCADBLUAXwHhZU1sPtn4o2SAegB5Unscft56Of//upPKFevWTj/D/khoiP6/+Rn5M5wF9F/xGkX/4XUped9/d+UT56/2PuC/yL+qf63sR+iSDuofPmVp5VncqsGU/l+ZeNDWaMOp0lOkLGenPhTac3M2Gnadt0VkfgAA/v++UNAtR8EfR/6ee1FmXkMQBF+to7WXvQt53Z39Ynf3Tn9+JgM3OlsuWup7V/2GoIoGZ1P3yDHV3pEfo+cwn0Tcf+lS98yD74Wnyto354xYT2R3njJQW7H/IvW7p89jEGmSrzDHxd6wdv2bzvS57qcakbx8KWI6GrLXfsUT3/3st4uSlHeOOg+3aMntS6Gz1zj3u8exG9Mcug3xyEY9M4WzAuUjqipMPZuGHzWeV0ifmcsvw31Bhf+e/FvOv35H04/qOxFhDJ/Qiq0yfv/9YYux+jOPl3C/9jCmVpBH+MPLWRFC7m8j3fkK1uSlodkIged3UEfNA0jeXoC5afgps7TPOuC5ipuMlyznU6f9cz/uHdY/f/Ndj/z/7dlkG65vPdjke3/Rqg4dP7+icfxa/eGtrRBBnYzNVjrSO0+JckbStd0cPZ+5335+OQHeOCva/bF0pxUhMSL/bHzuoYphUH8Z+eK2rFlfw49hsPdvvf/waSz2wuquL/LcYzd98T/oED+R7Gbwvkj+8+MwqDoLnOH6Kx+/uh/wnfnAa44git8tfi+Wp7Oy2hvRK8za/88a0nCeyAamFDOfcou/Er//PB9CT+aHoMQ28X/nedtgyO6nuvaQMVY4axRlel+I16vN7SYNL0ixob1evjvEQrB+Tu3EEPVLzeVtC/Vzyg//mK37rvF7JHaZ3Q1bAY5ynkPAJSeXBpLljsfWHxiu0pvtzAb374ecGjo/5kE9rB5FtEPAGlR3Pz9i/ZYu1d/VPQo16A+WW2MYrnQOH6VHbKcttCl3W9NebGuqRe9IaeOOYP60iYlAXGR6zvguyP+/q62LPIhWfyif/sLuLq5gB6qI13SzPNXUxEqkPb9YQAAA');
