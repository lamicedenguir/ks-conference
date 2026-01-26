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
    header('Content-Length: 1344');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRjgFAABXRUJQVlA4ICwFAADwGwCdASpMAEAAPjEWiUMiISEXO4wAIAMEoAhQZmJ3f2zyQPfl51fVR4IHUA8wH7G+t36AN4d/YD2AOk4/bv0ksxA7WP8L0XHqD2R9AKrjvo/wHCDtUdyrsGvzv/ad/HqBdQHqR/kf+R4M3sAfy7+xf8/0i/738wPVx+Xf2j/S/cN9gn8s/pv+e/Nz+7fNJ6y/2A9g/9UFw1OMAe9hWdWNLd7O4LnSdTbLNRmP2prVMNvmtdIA2xU+HZ5nkJbKYu1PlSUE/LKs0yUf51tzl4zTYuvu9/RBJP6zeCENaermgkZLDSwoSXAAAP7/9KFa6T3Z9y/9YuO3fqDvg3J83kh1Lc+MTr3MrAossAZ4qVaLoJ+tB8ouXTqeKdu5oUL9dT/WdHvrdm6Rp2vOzGB//k4F5VlbF8+jZK77a2ZpECurnwh1tus1p46Wkl//GUVv2Ry2MIy0OoRaigoOP27zKaHUfrwlKMdX0OLqFplpmwb4AXrTwK8PjExG5m8zVAtgqfn10gvi+W8Yk8H3GTTwNkJh6kl9H/+Xp6Gn7dd73sO/4eb63/X9X/tBftLuPEbBdUI7+qL+8jhoILdbVO/7Axl3e5qoW57bIpLlbrxKVO3+qaVetmRaEW1V4SfvN1o2whzBsCjl3/EfmTeSZ0Tw/fuglhWAD3N7fl7FkyseYOP9CRcjGuFTwuxUftTn3+CPstG7odvR256r8F1/k2/HbxPl/PfddxmHqWRkJblBaae9/+Jcr9Zxxl89XOvUxePOMdkf35lw25G9RVGXq5iUV0s2g+tt3R5PRyRTqc7kCYK7p+ArRk2jLD5FttpO49NYQxVGIGjZ9ccctYLXVNkMI69O0KO5wdk14ZIvQhb+nA+bLFf5qagFz882T0tJlRGjpOt2kTDmztwZ7Zi+q/hYZswPG9PDyZXzFZZigz18KCVHIhrR/5YqbQ62yP4K01yrU0ny0loEwNjRGKCd5qwBR5cIzKZbNoUM/2zLIGsU+Y0ggZ9qOYz/SfVo7MmfIAn23pp/IzMbjjcHwr9c3T7mP9y7lPVb4Wy/mMm4B49w1Ii2TMuG4dnZWRC7nnR3oD/gIP8o/iohQS5BIm5n785gl74Wq9DM2KdAsb1xoWkYfup+HeZ3ESLntYx4aia0vqFzdtr/pAnjOaPLFX/Ex8kvfsQH8kxec4waiTwZwvUe+lV+mbZC8jV6JUAlVyqEdfUd0guRf8BT1UAjQDQT17BvCa6C2lXMp1/gLsv/aNXyxgisO3oH5imMJLjmeq+LudvrKznK8MNVo66/pf7aHlE6kPnfR1VkpIQzr8f3n8SzjC6NSSilNmPBQAlew6Uhvzgd3Yy2BS8k/EL6R/bcubcY6h1JoNyYDNVG6vHMtNCCuWfQBonzsTcKIXXQtePTR7u6Difl8PKmCBYcw4inKChvpr/cJLF9AHzsedO191BCudfOyqqQBmVIh9ZL9QuvVk7r6giA8SKGo8/wwnXK7k9R60kWvlX2lGwZ/bJM+SJj3h+GH3HyC/PE3QQRg8FW8lnmxYRePDthLbuMuKOp22omK5y7fLRPR137ISItmy/WpJCYgaTRHACdFHNQf68Um3EC+un66tNtGdlfZtaVcyD/xQiROjng8rqeZZDfsz9d+AaQ7g5ceXV3rOyhwUwnK3Dso0h+0u1R99gC0BT1dJphdTXTzVcrTEPp8RESZnoV7Q2wFOSU2/xDZbQEbx4QhFSSBhf+vErJgRxaAxZFl4fcfSDmlFk4LJVLs7d0AAAA');
