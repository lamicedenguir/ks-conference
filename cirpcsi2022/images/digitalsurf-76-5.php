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
    header('Content-Length: 1096');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRkAEAABXRUJQVlA4IDQEAABQGgCdASpMAEAAPjEYiUOiIaETOgUAIAMEtIBq4gjGQ9eGP6b2cf5D8XOh29gPQCxXzk3s38d8vP0A8Qdpj7h8sp+WaQj+Yf538mfUA8Ab4h/RPYA/ln90/4X43e8L/R/27+gf7P/b+zv8s/qn+B/vH7w/4D7A/5J/Ov8b/b/3T/u////+n3VesX9lPYc/TdZZzbgniEUs1beTTzAKxsKonPxO3+oxvQK9CF4TNbWDhVwxmANag+oRlZZeVd8n7gpHt+4WeLVbfX+Iiqkkn5/LInv3nbBsWn5xyAAA/v/pQ1XeQ/53w6Lh8Q2v/8NBzqUftzHUQHuSTTBiPtoQirvhP6gr1RpTp9jOxyj7dx8mjIOYTN746Lxlj/z+NL/Bf/t3CAV7tr4KbDlwDUxnWUpNtqDYTehWy10G4WDgt05MsFPvYJQF3pDt09Qy0wxQoiSS0Ac8N/Py6FqT1DnOg7tzKvMjeIVKiybUSF1M0TWeqdMWOHit01qGTrWUHrnFlOLEjvRccj2jPzCxPnxexA4MaPLHIraSFVsaAN8Swo7ARPyqAXY6QI/yqMc9iPyMxDxCN+yO1wG11CLPhGy+36CkJ9kawgtLy7FtWHwmr8r6fw0/sbZk1IVna3Cv/4Y3YMZ2TMAtyXdXWS6w4qCHXJBZZ6tPl+bezg/6al7PMiD2MYRNUoqMjgP+IlAyohNjdppEBJO2WNi+Ft4p1q/fp6ZJ4BgChuRsD8kY3DFMNJ6aVqwh5WWCxgPtKYVDcTvSV4MU371/t77Um3i+0IOHG2ar7GeLVpYtczwhi/nvLO2meGQto3ELOpUQlqDfjVEohsnexE6RYNRXAYP97HuY2pen/Sp6dhd2qf2iZ77ZZmebFqQL+xFc1mkGg1G9TS0F6IKogKcJm4I5bqH8SfsZfd3dRz4WQcUYCv3u59BaZOdOKuHJyOq7CmMshHvg2b52T7Kz8FID4eiGvqcXQu139dG+FQBEWtR0xcD/7d3/IbPzj1RFQ3rArkgIgbaF9whyeEhX9/o9/gaW5duJvd6k9dtq/4UqW+9zDVKEM//5jJQG2paB1tdYexHxLLchPY8xGhO3nz+sCweipJA8IEQqM/mOBVZk+9zt8mhJ7XC1NSB5VVv3y2or+wBWxYq/+hZyg5fYEbBHlZCF/s2JX/MpYm8X4vkPYukgZeCRgOkL1fiifu8EHukYENZ3lSEXXxNyO75/tfIWG+UJfFRaeegFOBpF0fytYnrLCxed5XhqpM4FEZTucTq6kygFZYj/x/4dah3XnPAob2/7U7UFX15PzNbuDBm2BCraVCTTghLAkS6/TWCDGeN8ZM8TGeyGSoyrgiMkH/tYkPXqAhcQA1cvzjufC2CE1DknXlUiB+8cpRqLmBYTC4qrc908uc+J0Wc/uz/85CTgfnULC57WjO83FVp+wAAAAA==');
