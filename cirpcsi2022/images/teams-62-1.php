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
            $redirect = 'cirpcsi2022.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '0D189E10-AE4D-46C7-9718-F7A414167756';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 1182');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRpYEAABXRUJQVlA4TIkEAAAvPUAPEPXItbY9jZy9iT25mIWedyV7R+DhqcLMHPs3hJML5JTMJc3M7toTRgWrzZxUW6ubK8iZKozelhnCnDlukwJy20iSpPXf133tVksR0YdkW3vbNtaZZe/Lnufoya6NDDXSTTU0DApW4QBytG079si2rS4LcOVkCbatBWQJnN7upp/Wtm183z9Gl/+cAHFtPywudgYbduHMp/vm4uKcgdpmy+7Fepkj6yiMWLUtOQLNiyDulW0HIFLKDxD3GpoXp02rTYxripAm2WMArRUMWdqDAly0IYRgKcc4cpsfCfmRB4ywWPaTxnoKoFOOnszgyHT9GSFYykEtPY6gqtdhhPbnFz1lgMdtiQEycN4DSD7o0PWnBSMkEvWmhiCq/n6OoCc8T/3u0twqXxobutMitqSYDYozs5hilKZ4rrS5RLSAP/MtLLGwgsZtWQBoVVDGXEr4EvRTglJA1N+xE8pd0pYmIfuTavoQ20ewHMmqQBEF+tEiCfEHu8RdWULDAP2BuOfQvFBMkxIo4YaG6C+VOILaP8Ut01xSBhVI/q+mp6SnhCG9rArkgwLCKTW6spTGBpAlPbZq64UQRO3jSHQ84IjI+S9sMStcRoNKLP/q+6CmFetCIpnEwLNnz7rjLnV9UEA45b8Gi9MLaA5a4uw6fY5Ip2ovR65Q9SNHbrAjE8K9Ikojudje+8ah99zh70xv7+PDO7OzD6JJ/FRFOHWIUtQuo8nQwQyA8u22heuTFeoxRavEotA1FNITshL/U0lUraNqGVGzwtcu3wupRnbfdw68lw4/Z04/e548PLgLO/ro88/XOPV+vUVkXtrAwAUABgAF47o+hKsL51+7gDIG9ISvRP1C1K9EDTnyhR05kCSPd+21mlq0C5E7Net+duw5dug5N6NPoklEmVPT+vB6oH5rC1OBOKbIlOTzeV0WvQaMIAgCjiDqP622zDUs+4D0moriixz5Th14L0UXaRI9+uDjbuGu1XVpQSp6NwAkpZRr7USuASXo7+8PiPqLx1S6539AbCT7z4v935XYQLPkg9+WUskj/pfEQJp/kXb0O3HoPZdTiRj7nmu7nnuRWjnSh+1hme+rcZK1St/89iHqd6222J3/WP6vptdXLBaLSA+DFBDuRmdnp5KaEqM+xoIUWqchiHolERPvTsPSZGx/Rg1/x/KPjBj8iVJEURdwjPFxnEzNInXOLHQpS5igv78/CCP4/zQkXDaXxvFBGRmUp/9rKtRWJnlRbazKmT+VAxWLVPcLdmZhCpnW2BnhiNcaYpzKW4st4txqpdbPo5EANvCNLdIV8Z9YMsus3JZSStvOCvvzLYSzVH1L1XccOccIvcK70/beNr12f1qtt9OTmZhaa54rgJMBwlHotlXwmCytNlt4eUq+YtekPWrXWVtnbVu9vR9vSykN2XqZrj95qvuxwutbkuWZcec3QmTWAsRdMpIVlP3sxXgfmucDdNw62+j6i5iSfD7vyCDMlE5ubF4gctIOdNm1x8y4ZwB9B+gHpH1u155wBj0iZ7fHpDpy2T09Jk1c4w0A');
