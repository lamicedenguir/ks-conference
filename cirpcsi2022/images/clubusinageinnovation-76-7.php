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
    header('Content-Length: 1480');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRsAFAABXRUJQVlA4ILQFAACwHQCdASpMAEAAPjEWiUMiISEVmSTsIAMEsYBKgdMtbTvNE98UGgA8wG6AfsB6M3sAfyL1AP1u9Mz2Iv79gjv9A7LOce8aesu53/x3bXe6flbyA7U/9w3orhf8g/0X5keU3KK/jX+S/Nbmfe9PYA/kH9h/xv40/476Qv4X/S/lz6rPyn+o/6//Afjp9gn8Z/n3+j/uX7sf3////Ur6vP2y9jL9cF7bu7tJkTE1Hufx8cP2vqziy8lpog1pIpBEmYDuWHaIHoDdjZPUV5A8nCyH/TJxxOGrFLmxAttmUd3hY4wvPFh6/RUVXl+2Ss+6aTNclileUAAA/v+lCsNuLMd45+7ioWZOTPGFHExLTrT4xQCUsmxtMU8adEl2C30Ld/21jedu6aFFsfnOv5/NkrlhsjeMlJj00X/yb5zg8PgOleBrgJujqSpr3sR+SgTWJ4g/O05RZKJKehrg5/9It4/BvvxO8mvQ3pk7riSstbKSkbEJ9TWl7YlQC/+3p71JBWqmigKDaG17AlwsC5pe+qcxYG3SmBY/7j13I5ps95HHDO1XUH0DZ7tUvHEGeWkGQ/na2Spcearb9Grf/wwaOIeee/By9vjThXUjqWF2WBqQ3cF55C4mK/wNBsU7rdEwFZXhym3U/+CxNVSir1pYnmwb7RPt2sjI67pjfqQ190YnXhm+qZXAoMC1YJ7/yMcZDbJzdsb//KtQYDu31IhFkgV/2u+dESsMNng8+b5P16niezbhkubrof8XODgYJ9Juc8IXt+Pq7kZTZjD7+MPiaqb3VAkMjKwdJGedfLXdGGRmvBBL1tcUovfokBgkVRrxGCuqDoHPu6l0f5KANMHBcuTRlTMb/poqBZQCAONRgZ5uox9h/4s3Xxby/bk6uA7+tAOsCHypf5nN+5XKpYjF707e3Xvpc6vqpB/DWypQFxcM0A8HoUK/9iFttCZJg1aSn46iH2WqTRDbfxgUa7YOZbxZfts7vL2hOS0Fw8e8Y9Gsvwq73vTeF4pha0wQGwku12gjECSUm4mo0nSvo373WQGVvbUMbPB+qa23KE7DAfo4THoeaTkjyS+c2xhyyR5Y52qy14yTdONp4NaoyN3LPQtbyOYD7C7S7Cz+XPv0e3N3N9F0YkmVdHlLDOOKbVFMkpq2y6DpA8sXvCkzPnMxwFC52kpd+6S03UgRO0H/HCIRjPRTOeuj1Jf/CKHCpmI9LOvm6fSdJ4FFwu5wz+/tAgp1KRr7iqs0JqJYIsVl5ykGH3Zz3ON7DVs3AseCOOmtk5YvYFOGgRjRMsX4psXbhJ5afdauGxEYD/8M2/PPaETRXc+O19zj7rv1CBI/ugNb2UDnhjS47ajZY7M1bKBBWjL4ZcgVT3mMdJ49p13DbJjc3GjKWL9UDmZpF6chWNlpViSl7yYMW3FsAKeRXzW+FhQkCb5t/iUgOSeP8j8aiszaBEH+RkFu9PgegNcHzSvEOXF5XPbZcvZXKhTJcmmP6fd0SLJOPHe7oT/9vmv6ZJ+gUwX4ymLic1lLogA/k2/pM/AjUnEKl9Y2vKXHBvCoFs9V4cx/xHg4v/J/zavtcDiZuTjYe04aa3bSqkDiDXTq5ilhXGTgnRR0VmpcVjl4Ssmkhk/wTCpJ2LeI61aaiyrHKLIOd9NIdQ5M4XdYEuns4QiqxX17ZgNXk0MU2de9Pgzq0PEuyASsMCLspfm0UjPXU2+Ka76W6QIL03VeZ3fiN/eStRgZ4OKjb51giwQ2bImwXb02fkDx2WUkqm6Y0YAtISeF8R0E+p/cwRyvPN/q/Z05dTuWGQPlO1Kg+8CiFgi0KjKiCFZaZflWdryUxHHxV1Whfe6OYa2bmVjTXeh2D/6ABotLJo+rtpFyY96k9zKNapb7B+YTJvRmNDsylTtRUhh/Kv93R5xYqFUnx2OOyAj5n5ZR0O4rtFl8cmBw0ErAAAAAAA==');
