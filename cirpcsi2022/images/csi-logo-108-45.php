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
            $redirect = 'cirpcsi2022session2-3.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '0B0D709B-FE71-4D06-AB4F-7E4B29B81FD6';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2-3.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 1334');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRi4FAABXRUJQVlA4ICIFAACQGQCdASpsACgAPlEij0YjoaEhJJVaOHAKCWgAzbRCe08iZzPDHdZ8eeBz7MPEN/ue6I/Wn9TeEA/aXrMPQA8qL9tPg7/bf0pLmb4S+Jz1Y/P7Rf5r5APjzvZ2mv8Zj3eID6q+VFxg0Jz1DP+Ly+/VHsGfrr1r085swHjnlr7FL6SBeedbf1WW4tmR0yO496Y4az0ZClwf/ZeGMbdCZMvMtvyQOOMMCvYqff3bAHejobKdiPEO+TCd3Uj6mSH+ZtqfuLSkUS5GDJjYBmDeOx/z7LRgkjAA/v+90t5fwV0OSktEmCVqUts3IXbvN0uo2dA6QiL95D3xBHNhMsCG89oTxEA0Ze65GSL/535GXcxn9ydtfBgRgEX+068If/hQB9dHVZZsrjLziDKGnS7mWpRY6J4AL3KPjb8PiWSYTG9QrYWlpWm8bKD/jDXY/C/B/ji5Otxs/+Wwwx9L3kpl6kicSOTxG6VMyci9+kByGoMzlTnYU94p0/XUa6a2Ox2xzKc3adnlLqlt7Lv6ProE6lzR6pfLYn/o8GDfwVShbzqJ9f1V5U4ykR7/uBcbQ1RZOtin/7J0BK00vDP1I9GJ1UuYLrQXO5Mgtby2qgRCkkDhxEVzMu3WOeRVdjFG83s2A2Vb1l/UwWSUr1tBqUMi9S1rkzxfDKdAWXDYG26gRwwwIWoeswy3X6MUmN6LpqKdOgOF83Xbxa6Byev2u9lxu4Ao9yujwd92ZQwj4aSCwQfoMDDIrWUWQuZx4eTzoVNF4cMWh8qo826Ldt74Pw8E9/kjAiEw0xEK/hPsIdz/qR+STE0V/J2q75ddDXbn/+MH0zp0EtYB1k+iZtOgztef6UfyvzayTiJzvShhgny5PySSEEET35z1m2f4Oj6mXvlY7KM9S9MvqlYzONShQ3HdIs4K6LkzAKYbYeYr/HaNhvPzGX8B8+yigkiwybvYm3sYHVvb00av2RISSxHpHuhZeWx1m552g8Ll8apOS81nAQoxmERV+/cG8HqgTKSGkp3KYw/j+Tje2RqOfeckj3gKezOcDplMJYHxMBnL24+OXCVZQmoffav3P8oqW/wd3ZHu8UqfwqNnO6tjUAvTOa5VbkzCZvAucebXWmZLqcCsTYZesL8qAI4pgYAPAEJoBgcRVRCik0izjb3all3+PhMHh4ZLlFNkSCt/xu4k8f1sQUT2t9RUII8KsGMpvXjX16/YhjIQL8AMSZxJfHWztdkW2nZPwev8MSlFo7xKwuhTNXvS/tq7RJzRPiLyDogO1pfW1hzOXNg+rCvhFcF/GPeZ98/cJznmGteKBEhHGbN9Du+LE55G3RHX3BOQPjm3cJz/Y2TkMcwSCvfYAJlJm7RlKgyCFgo9iqBxj/8l3nMPpH/+nzrxNLnhmW1pWfGvP/gTTSUOHnGAySsLpxeD2jHhtf+zhePC8PXExHXWSgGwHG4vIRRuUxpPPf4s9KHRkYgCMsmYLmtz9IfAIm8+871qhRam5LKZyGvd1LazGuO4Tmq4r5ecdYiYpzk2/jPVCpYGZRF4VBIryn/69sUzpOQ6qEATCszb3WJhWtZCgAYXZlHxhNdTnW5akzWkqttukbACntr0wUDGn0Y11j0lAiB5JrOds6c8NrtV9JmEFLZUoPoBDBcGKivMPdm8OJYnNk/mGww0CisDpzjqcmgqSsOVFZUnJRdTvoZ9AJexBddSCCjMIg0Ucz4//M/+fBX4uRljz9IjVu1FTjB5KcP8QhLGxx7eIAA=');
