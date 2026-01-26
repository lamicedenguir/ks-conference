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
            $redirect = 'cirpcsi2022session3.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '417E1E71-AB87-49CE-BB12-6B6549E2FD3F';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session3.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 794');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRhIDAABXRUJQVlA4IAYDAACwDwCdASo2ABQAPjEUh0MiIQsGqswQAYJaADB/BpszqQOAxtwPFN/VXfQOtJ9ADyu/Y1/cH0mbtxom/klkxftOcP/vGSm/P9CO8jPVZ/6jyy/MP/C9wT9WP+PwFf7Mh1cxgy1il8UONXd1GMApLJpQoKusv5kPhkRMkbpk/ILK5I6F2BvbAAD+/75bzfxdj/lK1rweyFNSA6wvEmk+tUhgETUxAgbwVjYA3zfznNbie6D+vSV5WN3U1Lu/+iVzqKfxzPbgplqcY3vvn2/IY9f8jd/zbHn7c7/eQ73TqDV02pCqSZmJEzvu0wn85wpYf90aUGwVqyxY+52UAlnpsd2hg3CYHzWGtd7yOWrDExmN64nDkxorJ+lVHAHtWR+cMzMFyfgT/cofqu+9gFzZoAHfaIf6/eSgF5yvFVBiHa2FZ8/qReVfYa6KL/KZ/plVbr+TJbb6ldWtomj8txfZJhhvW/NOR/112tj85smpOUzspk7iCCwHd3/Kw1h7bU9w/rZzQglV1xeuf08QDGHDZ2pICsqsXYbiP12Q+YDXD0EhHSZP/UWo+ZKm39V8GvEbtBOSfxa9d/4hLii37Ylp/epz8/hfJ/dSEQ//woG7pL4/Dr/qjqMLlKD6ImNNZf2lokkj9mFm1r3K9Li5NlGJfwkQbIZe2qWmf0ywKe0vYoaPyW++ZxMxVl8qTlNWbN1+CTdQ8J/tgOay6xn7EB/w1snfy+UWxJacjF7lRtbO5kcjzfH/8UxK8s4JSovQs6zRPzAcPTsk5sx/q4LnCre+Z//mKMk971/UIsVfyDPrYd4wJ/9Ef/6XSf/oQ3on0jtFI/+wYX4D69k9KYsd8Ey5MY5bDP+gB7AOP/q/3mFmvm3/wHV/4tYCho+hqMVaJNGXx6/t4ugSdtjcp1DhnX28AFxAlm5NS/uvG5uJJr9ifcWnW00ZCH6Km6fmwDt89B4vgdrbfNntQcfP5O5Dnb5vDBB702sBPrNQNW+VZMiNHN3/+fj/m7+qfwIvsZ+YmbAFvPwSaK0kQAA=');
