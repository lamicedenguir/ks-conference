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
    header('Content-Length: 1484');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRsQFAABXRUJQVlA4ILgFAAAwHwCdASpMAEAAPjEWiUMiISEWawSsIAMEoAhRM/fw9+/0l3THiA3gHmA/Yb0IP2A9wHnAf0D1APUA9AD9jvS+9iH9rf239p3//5wx/M+y3nee7vp9+4XtBswf0H8o9Er/Z/yl/JXjueEfyX/J98f/HchD+Rf4L80eaLoCfzP+3f8H0oP538xv9p7Svyr+vf53+3fjD9gv8j/mX+T/uv7sf4P//+H39pvYt/Ule27u7SZExNR7n+fHD9r6s44IJXNEHKnpT34gie0nMtoX5nLO/s4nEkXpmlxLhwsJuvThBoTNTxoRTdKH/JZk9oL7cV2G160fNDUbiNBPRtYm0+mZOAAA/v+lCsFFLy5vDDNDKStslKpse9I8DNxiaXPl6P2wOdd6ofmDLb1T7Wr118djbcGCOup/q+XKHNp0gAxNUe5M//JwBpZEKkR/4cI8p06Sf4OPHb7xa3Ddpan83aJH1qKsxSV6Xp+Oj5dVusKA/D4OqJJw5j1q0yPbPVQX9omAjCAIPZU790X6Oirsdot6ftt5YgZjdemCboa7Gz0X2F/2nUFb2xMNfDjXpaDRy+tt+TFtfa8/2dufVy5lrPp5QRPrwEc4NnHKVI8tdWz/Vbi2K2ie/no7nCgPG9hvh1dTuixz0X8GCyw65r5HdI7f+hzL/DX5+K8B5ikJmpwVLxmh2tS9qSWvNkQWfYhmkGzhyTZf0jEYstBnpX5Q0j3+IcDNNNZxeSw024Fvz7xNmHk/+i/PeyQk492ASZaQw49Tf+2/e3h+GXUM+fib8499egH/XtobyW42mzQ9bZz3zhI4wKWHiYdO9yWJFZDTkN2SjhR3WWpiB9MKz9BAMVP+NNttpqj6NQB827RnoWp/93U/D2b6E/FwFYbeuf1LZZf0XpkY94K/TgRa/pc50n7H9dS3fTlrZ1dJw9CBe+qVGOMfVjgs5euCDnLAgAmQcvphfJipxzzx2fW74paWOSofk+dhuJby0BZT+/0XhLnHwYflLeBi/8NBAmDWEosHSc5dN6XC1nqXz4H8+TOx86LSfqpfMdfmmrp5fOCR/8IBcrapoRrnGx4sE0t4bHm9N//cppRBVc6SbIOXe2eViq7OjUWdIlwzlEAhKwSnBMMQ/rwg7FvBJRvXzs/nktn0WAdqpBBwJnvUKr+eukf1wFd3VmRDTZDFlgI9P7ZnbDa62yeBPZ/Qx6XscNuOcsWOFfOshx4yDFkc1pHndTDqXacouP/0GsgL+0VqD4xJl/HjDb1E/roIeN2uG43/0hz+kupQUv5uNkQi/42FcEvHbVlTGVfeOXrl4r5uP1nr8At9yx7K/u7dPxeFhAPxmkRq6j3WHHsCv/+RS5nK53rQC+T1R8UGot7OL3L9E9oaqLK3SBeoiUmGT6XwyJf8ktXNuZc3RmPkeL8X2y11Wp1ZZQsI0Agfi1W++trQwpZ7L7y81+2NRyU/6addRbjfQi+fRdxT/v1xMfCD6csSotfU16IhiNc25n39/LuMMLgja09wH45nQiNnJM0iOpSS5K7Lv6yIX3HkxCT+vuAcmw3TCm12tkizOMfcUy6odOzOVTQm56FQpFsD5khk3MJ8MWWhV8qiF5++LcWMM0mQVig2iR76rbnLbNlfezZg9r1kAnMFBEQyT/Yw2yIaT8/nf+XYJFj3ad8NoU4C9fboUnvAAb8IT4BZ/JxQb24MuImz+stvs3VvgPPKZwRfkhYNwPofdUqMN8nSvrXcwomFcYHpCgzMfzADwBbvbW/oEBe6qOgPiQYl2LbNiLgvASvKzx9SWFm074ae/+KEDdfcuh7e4jK7R/mtJ0MLrZGTBYm1v80p4uJ8rs/rPon1C1jajSVQkncxlg1IAOUjKPFggPN73nFk7jFnq8ar604ny6OZtGbtRWaB4M3zH+Lco4JtzmZT+8imqGHOl7jFOBX5Nct1ZVHyBgQMAAAAAAA=');
