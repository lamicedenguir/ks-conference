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
    header('Content-Length: 1482');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRsIFAABXRUJQVlA4ILYFAADwGwCdASpMAEAAPjEYikQiIaEQ1QwgAwS0gGp0Xtum9pn+E6B7w/6i+arq5nsP5Yfkz7OngDtSf5H+d/sB+VXG2gA/FP6F/tPyi5gO8x/JP8b+ZnMDd4ewB/Lf7j/z/tV+Jf+t/wv5b+1D8r/uX+Q/wH4/fYP/I/5p/kv7P+5H96////5+6P10fq97CX6tJ2P8CIXDxi53d7YycoCN9reH8jiPZR8zl4+hZPuoIE3vj/KP3DP8iIFIm7Zr54svd90hBwL+EXLt75/uVlLuYxsezyni5SIUGRzRr/n6ZSsJSX2vsVFci5AAAP7/8xBxjNo4OloXVPg21/+KQ/nLui/Sio11a//7eipUwyr9c/+igG5ZxcywTJdLVRccqrt75r+p6DONxd223O1H4ErXbarpJiPctMQjcwUjbiThMYNflJblZ/u/tbz4fo6/ftGKSAZCS+9mE97kGv8hIR/ClnWoKvlIO4IoYhU/3MYAK3I5vOPHriP7iL8HxF9Rp58sAqEVJtyBSeC2YaFIB1ruZAgbQeXEj1niJbC11sPtu/gGFF1/ulpZ+iFgu3CqqPsFuA0H38+JBq2gjSoryPeF41lTfBl53jeDgb9hNNzcTjay/e74XhtAw9iHp/sqH0tedJdYdTahLek1aM//txTIV5FiDsMpfs2wUteXliBjkM5dKGkORqLZxgO2f/yhQ0QJjokP7svW/KBsKiYyf01BCFJ77YYqS0nEk66jTWmfZUlLcWSn2FIoliRqJ44mN21n/RZDXmW41ViRw71eynrMWoS/OPE4wha25k99YPjfYxkZCUlDT5lx8eb9FvZ+sbYHNvuKysWqtrGVX0EzhMm/6GYeULM6bWPsT9zvLYRIaH9OkR6v2Xgf+Y/UEKSlpE3fdAonLfAn1hWa5gZtJ6j8og7uPYy2phW2TGzVl5sx8z5sIc9dLCHI/Sf0IskaX/ashXRyzcJid+JZX/3pVAb/CO6kzrq70ileAkhuxvYMeQm86ZqsAu9YfHyPk90ncnodCPx3niOXq5/nx6vZyMNYwVxfihgKX99Bl9y+t1reG63pWchqzR/rcq4UORlHuV9YRYyGSje2Yc3aJmFtL84aVM12djpG8JRt2xubmOeUIQ7OuKVUrJcXuXfH8utaXhpOyz5Sai47Z5/x4WR/GJX1QWeu/5WuTnoW5YggvQvQvDBLoPy0vR6oT/gOJhMqCK573xKPjY2m+vZMPatx/mHkuuwqRORhpzsi5bx6c/MJ/tTQbsZJ+AuQeC3xl74IemxogVnDfmpUX7MXnEvAfHtVga+hqYAGFTrZozfQZoiFrhORF70MoDXA4DPGay+yJBISfiyC6Xf55QQ8ijBv6sfOzZ+L1uFSL/eRYkYA+PvO+6KxIt/W5RmR0kZcLWt0pJiYrt+DN07zdkFzu+r+OXb1p92u3mHsrboiuXmoSO54nb7YtaGse3Zt6kzzVrWB0AJEaPT3Gm3/ugbAnmbL3xChZ96LwqG60CsFD6YQ3YfUX8SqeOl+GnEeWMj36s6Xcqa8XGUpbTGqBfROl+YR7Bid2Dhd0o8lZJ+Z4DdHmD6Fk706Xwip6QpAD89aKnETd9xSvXvu2dpzV2TmasC5I3VPCOsGzJSIIyMJ6TmMlkBWfqIUbLgege2MKIQFNYfHxjOZJr28zjp4JpARPWNVp04/VpeLqQO+6D6Btvcd2eWOr7379QhL+aCnIePIAEgYX0/7+Hmf4d/dhIKwVYbGjnMBvv2g3LkezBUBSNhvK4ZZnwj00hj1mwUtXr7rBiPpcC3JmHVFakNVtpFb0Okf4d/gfYPGxCv9hxtBFUhn933gaaR/rvR5OlwufSTInH+35ueLa2TkVVINU7Dxe4TqLrUDkX6a2VuEMQPgPfWll+08msK3OMxJqxlNgKir3bU3vYJD67xVXfBhZ/LqqvZyMf+hsj7on/st4AAA');
