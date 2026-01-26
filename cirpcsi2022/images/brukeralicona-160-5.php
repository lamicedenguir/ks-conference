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
    header('Content-Length: 3124');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRiwMAABXRUJQVlA4ICAMAAAQNwCdASqgAIYAPjEWiUOiISES2IZEIAMEtIAQgB0lP65ZS95e/vPZt/Sfx6/a32B/Efl/7j+rH+q3Tr+Q9Df4f9dPs35Lf139r/jvvL+BX9V6gX49/Kv79+Sf5R+2vs/K0/5n8gPgC9bvov+P/KP+++g/+0/kz7gfMP+R30Afxj+a/2z8xf73/8/oD/XeDf9i/z3+w9wD+Q/03/R/3P9of9D///tQ/jf9v/ov7p/2P8b7Vvy3+7/7D/Ofux/lvsE/j/87/yH9z/yn/K/v3///8n3P+vz9lvYh/Wg4zcuMGcyGOSHa/zKQ1yZ+RIociJ+AXkAg/JY8yQJ3Nqfe7UUZdFOnYWzx/cOWtDEsHdWwiDETEmdS24vG23wfbo68VMnVFd4n+G+qgujzmeETn9joAvgE/TO2pLdYrDAe4biO4IrsO9SBN8u1Wgu+P0jHAEQk0yOARUQY5ao641xancZSQDT9ave8xizdjNHzF5q9yTQhm9BEaBwwnP4lkB3oq8JtfguCRhAWVfJdXVUo97fNF2t8ZuJ7hXv9U4zI4mys/L8ycONH9I6eu25LAf/8ekndf04qoR32DS6ub6hoxNvzAAD+/t2A1vHhP62Y8qYi4E7vcd0S/kk4cclTcVWrXtVx0VDi0dE4Anb+iD+tG2Bs0+012H+p9DwMn0LRtx40fu1m6O3EAa8Yl4xLze8oqBk6ZgKyoFBwAAx+RvOVtTl291/lu4TMmtZv51q4r1+A6HF/dnTXhzAUdbz5VUehvayorqWC5Puvb0IGzU0DTvKgG28o8h9bGJDXAMplB70RxYHkVQ35matGSBpRWDblQbu5izILcx3TjKYV6EvRbwu9U2Q83gSW6fVNU7znFWVvMuSI2oNihz20u5BTJ/f9vyBG2Uc/IlPEnFSgvQZYKnQw+Ddceyrwzea2hWgFF2CPlrwOqbb5XwMETepJ0d+/1OYVk2K7ZJ4yGDNarnrvQeCPtUpQETOk9wGHye4JuDRQrApoAziMqsNwUxSGPSL+Vq7fDroS6GVEUTDSp7FMqE8C/sCMFsp+Fa4gN+uDjjgCNdxgTr/7d0NoPx/d4ru3pd+tgBh21/mmqeBrtv/yPT2oHnhZD6WcEWRU7loaCwyHOFk7swcefe2rB4Xfg5n2NYUENavbEVN/H0n0amzuYLJ+xXv4oduMHxF2vNjG0tQ8DOoLqCcwfmrgHrNJzSSS0f1kI4HkByac/TC8ci/yV4XKlDcEfU74gV40giL9F4JLNTds4ym9rZobeAOa7GPpA1NZQ5kI9egechgF3f+cYo0T7I83v0VHY1WYqQ7+JrLdcQNx/UC/PLIrJ17NrbY43IUvpK+QjjELSCa7pR7YFjfrTpH3d+7n93257enhI78OJ7uyFFFKo2RGO3lwX9pIyTU8fW6vB3Firob+M/PNZSTtGdSMXuPhYt4TRY08EcMnzyN0mLNNpEhNfny35QuF8azWG3dNzn4CTfpApF+Nnt6Tt1RAWjoYDkQQa3QnQDM6uc/Kz+8/sVXkz5CH1c1pp0S2cQa+vlVu/5AwuJL1oXai99gSAdc48lgpKURb2ZabVkmVDEhRLd28KOCg9za1tCupN8WJd4a0qlWrcBmsvRs06jQ8XCUNUi4Yr8JD2Ebn/pKZwqVHx7qqHT/ELdLpa4cpWzU5wIHK2/Cx7iqABFmhx99kv02I9t43Lc3EJV/J2aV3b4LI1nWOLf7EcUYc3g3SMaijiIsoaJ5olSmO7Yo5T5ZHctscqfZpY+BHUQWNZhJmLRs/XlA1mbzY3pRElBoBgd+de5R9mRtg4GqXu+RlE5/cRnkMB531Qn8KqilayxCltwRedeprqvCBDDjR8fT9eJLSQ0KzjALc3vGgAiWG0TRzhzCi/smk5VTpgCsG34OM20wuiNDf5i+Rzu4mKtjsg17h9gPWht/4z7i3soqMxgTVh5Wrkm1NORF9p3i+WgGZeariUYoLEIVGzf0FBHLocx3B67Pxlad73/bdjbx4cXboRoVITd98tTCv4afeOOBatrRtA6a8nUpddsaBCEIwmfh5RStkbKev3PKfnSgSTUYwYvphYUwtUaCd3OgkDFN753///rSg64AfYdfyJ4uz/yslQcihofcsxLRa8tELsPuc3EQQsuQ38ekrYDEjvXhxRHWJGHXGfwlhjvFqlG//ypwcfr9rxQ3F1RDybEQvLy74Dq93OOiMcv9PpuCXGaLHb4iC2MpPTTKPxm6V5qIbkYMNrfY39gsKGrYgm5/Xo7YRyWl/WZhyOqsjY6DV17fpRX1xVC8m5FzGqJE51QQdoWsOLL3DnltDqB3EfOHgWHJwO1uHVvKmtWKmw8rVuQniScGdBYbnuzDV1KiP/jbHoAUfykxi4LC+iTR+aGJz3stPNW08PQDGESGgiv5hbJKxhJm2YnCMydnz8LkfhLZB3WsZI55402nSFXpEW6fiVzqPvFL4ccQh46VQzUfXoP5F5VT1x+Xaowz0BzD7YtgHa9a3wF5Sm8sJgDty02WzSrrBYoZ6p86ECuaOBIK1dUva2uRghkrNO0oCvD6yQPWOrK3DUBaYTfWbTz1jpfmInBSoFVODp5wajeCLK9FKcmv9AYEHobMwX47BGsp2n5kUdv1pK4G1xMhYn25x4FJpySZCt6unvZ0S7KLwbH/NypGyil5+x2gXHH8/j39j37WbA7OHv6cbvu1j7uRX5zPXzFmvspO3U8SxknheA/KV0h6ZbhcK9HrGcS6eKgNHKALsEkE5VvlO2EDz7WW7ZclBvbZI9/tUmcqF/PK95bO7uv/Fb78y6Z/m/mwXp/1+ECkd9BI01jWPb+CcZ1qcfy0yYsxbF8o8OCPOtrKSgkapeaXugCC5BpFJTDvC2LCFqwNSWatsuLrEWkyXpR3gpSnmpkN2l9bvRx69mH7HsDuRv9dOT9hE18umZOqQIWYeGhFb3TPNwdTMUfcPugo/Fs4uA9aQ3NBct5NVFGWedD6FfuWkcbTsUMzt/rgNAw6KxM3xI5ywjUoqZ7I3MQDe5X/mz5pAuWkQOZ0p28f7Cu0mMzhbUQEEucgpcwNGOLK1C4flxkKfMcSxqstOsT8kMnbQfxymT2lsId8Vq3WbgZciFk0G3xgD0i5TNUTQKN+u+1x1RzqV2NADLWijyE7zE7UaBAa+BAY2l5K0NT3bWtDS8Xw2Oie+sxrwu2Tzyc1Ks/uozQu7AmyXMwD0gGMYycEWvjpJEA069JT63hsNtFiwP0DF8wZsEpsHcwFKfdQ8HbTpukktGl0u3GvB3kaZZfnVAKAReFyfMDuIxDiXxrRQ1Mz8/WMhxcdaCpKsl87BsV0YbcfAkYqR9zdwtd3Ew/VF7fIOZn7AwX5hGuBUqpZGIsn3tp2odVJqPteuy3iC3uFkjwv+bsXP6f9BvJR5c+dxlLH9lhWltX/RZIgEn61PpDcy6N1isNE4P471dddTX1fDuXicE3KqjOpd0TzF+ogMKifVFICR/C6NuHCe+vJu6T9oP7gNwBNkXu4H94ANrWliUXmC4XuGTkxR53DLm90HpBDc08BnxYIE01Kcqh2ZD6QNGDZ+RVUAg9pDViGQXhgy3aHt5Ra7OWXDrMC3agcSvrcKsnwlJyK096eIU//yc/lHQoutit1MnHe4C42j9k9U5JpxlMhcYXEkU4RNPHQFMjZQtwMFYWt0G/TPOfWsasAtxA+N8XEcEy9FTb54tkQb3IhTYz2EmsRUxKgQKrYLn3G/R/ZhauKskLBUQzZM78AW8Octb+G3OcY2hjFt6ztUZo4ATJJL9r7i9A9cOiQksLn/XCapE592upPmLmRRAUfQdM/Yety0fpCEgDQZPn1APKCyMfNSiM1AqdAPUuBbyvcllHmkKtHfpAjdvcGLc/x4h1u3jK4fOH3/3p24j00dtQvYOwApRts4mEYjoFG+sPmrmz3qCfdQHpRNNljgzYnX1QxsQhJqzs9R3hIh0PNZ3vHOHVUDivZaXiBt1VuYp6sWNroLGFsLGR4PhfUgZe4uC2dRusZaZO7gCkM9l0erJ615RxEtTQS2nlFarX8Vg38SXkm+3gar/IKZIeqOTIAtfTmDfq374AAB6+Of3Zz5O56NThDFv+V6XCDrRspemfDdb034/OSKFlusAAAAAA==');
