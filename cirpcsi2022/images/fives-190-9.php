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
    header('Content-Length: 3578');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRvINAABXRUJQVlA4IOYNAACwPgCdASq+AKAAPlEijkSjoiEWCq2MOAUEsoBrqCiog6dvnN22MZ2w5EfVj4pXTk82P7N+TN2AH7S9bh6GHlw+zV+43pc6p36I7JP730f3jr275lXSv+79C/4/9vPy39l/b38w/kzvb+POoR+Rf0T/X78eAD9G/uP/G8KbVfyAP5j/V/+T5TvhQfcf8z+qXwD/y/+1f+f2Xf6b/rf538qPb7+gf4//qf6H4CP5h/Z/9/+w/7F/OB7Iv3F9iP9n//+g8E6oKD++pO/IiaYLRMbqeEVHwMM0slCGXKo3Evv9GoePPPP52Gzd+HqPEQLqp7YbFEwjzeK0zPgMjsncLFZsminu4q8Y2lVMcIo1hr87Kg0Hf63kiRGlJtJm0e/SScAEPbcFndtm0QRiSAUTEYLdjFXzRZ+5AkwL2O1O4GbcXn7A1aQxf9YN/0IUG2WDQH7NVH0IdVedq5pC0ovtcc01a2YwfhAL9WnscDmNyPHMI7J5942rocX/8P1f77ZvkM5KgY0aLGHZTMX/fi5HPKtarozxM9N8yq/ao3bSPEkRiK0z6Mvn4amsgYQLanBAeqYjZHKWKb5IP3OkTgmTJ5IL3l4aiAYry2VGSNMOKqd8pNolSwCacLj3Y9s6TC3ySvUGWz3dBTsgEG4rd5O2XS5mWvuXnICpCIlVbYK9RAAA/v3Ap1Gcn6KxD0h/eerpp6km+QFgprLr4jauyJNcwG0x7Gv1lc6bqcIyS7n9APLLMDSy1itywQuuVmGD47v9in0hR9QsHAI8ucAJYKe0l5//47f0/AXK6GvmyccvdspBs2/QV1OYHBSKP+TF8C1Ijhk1vF/Sf/BcQ78DQqfsZ00/U9IkPV3ck7B4uwWPbKCx3BcOzzBdMsttge4L2h8CffFwjOluAfDx3jejWmOfYr8L8k42c5jX/4Pvf3c2sy0uzGCqmqg54B7jPBNenjuaK4lREHSDUrMVsBIUyO8WxxgLS3bH90eIrB0uZp4TCSv7yjVoYx4r+3wuDKh3jnk1/iKf+foDh7NYf8vibq/+Se9fPmGCqOUbuAC+qOmWRZJYa6/gtgiUpFG76WJdyI3SzQ9L5GLRaeLrhj9b73n6Fduaionep5CCYmiYQvZnwQA54n1nSInhVBOSs+xbU4A19NiRGqtk3BdHGchaUuED4bi/K9+JclBALw178hSKdg7la+nB/0vn/zvMHCu4K/SVKeHqqSHbECnKXDb8ktIj29KSaKp6IrPB4fCpkIRkXYTvrUuBWKnsdi0EdwzpqAmRJgHPegtRwEf1qQpTPFaQI035sU+ZbfQ+8/8s+UHS8bC8HuUTyZYjkkraOm8WN/0dhnTJJrWnnZ0/TtqAglbXnmSnTxg17xc9bS9hRg8V6hULPOsGqgzLgAFS5gCpd2EmFTxlJIxOJ41w2cGFsdjZrPgqScj3FNa898E1WUhUHsXIENBPhIDIvpyySJQ96LnOvjDeOlkAYBAstf2TnuaGd5WGUwgH79/sjACZ+xemxTn9RYpPZrWqGDvWGeuPc1DErhgffIDou/1XP/zPOz8BpnD8/HZGt4l6DUE4JekL0KQzE341wpEsWbDoU5flXnWA3VXPZE9GRfjGDO1FWHfry24uF225Jfm4CyIL6Vlhn4V/ml2a9cukvVWVNsPdNxiigO3ceOIQ5JGA962wpDZuVjeZsJWdGqAVwPtRoNkCnibxN2BMUx8ljvIaE5VwILXhBoLPGTpMsXoLDbtTBKN6o01L6EvdDWHx4EcwcNhJYJkiB2TCd+CQZ0W55YRLS7jWqzFcgA+6Wjs55OSGozMEMSiQC45uRMJJAxkbn1pE29dMKkd0Uy6lqwPg/sd8Yb/o8GbP/2XTbnNvgHaPsjPbkZq5X5rX2UVD4PEFPn2/QQbr6eOQAp1bL3YUpsZX5nV0O6HD7XHegrIdWeUv7tC85ykgbrVjmm0NJZEvDy1w53c9RB6W9V0hmsF+wHJa5UKM75uMT8Eq6ypsjtDUbpWsph+P6VGhrJMnZTkOLMYaekf8BM/P7tA38Jg+qqKKzq+6RzcQg8tAbhsXoJOoZXiRtfmcsO7SE2SqK0eBVfs0fgW31iNTuLMBFv2HO4i2fOWVgBZpu0CtSB69WGGkyiIPXDfvXeu3Zk1wpdNUEIFV7cWYb0Wctoz1244PdXNNF7iTrBVtVR2CV7cBAjFEaLB3vLkZ2hqAxlitPSs9/JVMdPFGZ5IiLAhCBelAM+e+4hlQooKBJKN21xRXNL+ZFwqjTi1Qq4F6zxfT+6NjzKksz34+880aYzwjERAKaRXvjpYuIhRL726nrKXGD1U7/dVxncYkbTZpffHG9Wzcu+F8fRlU+2hi6u7MJJV3i534CX2weUsKbuM5B70g/TWS8symVqdXqxLAF8mCWa/8iL0rqdONfLP1EO1sWoNbuPIHDFqBAmHX/bfWIqCsWVlmCS0BqWkkfSXxLKehm11gA12bTkZwnMPG7+QEyDZZseZ/TyUBYlRRgN03NYPxZTM2BHYQPvixQ8d+vef6pk2o7ne4oTipUOs5vKJYE8++67tfvw4QlXhbZwxaB6XGCMs5w5OhlqqhM9tLgD02CxFX5iRN7/yEkxdh2AkrnHwcH64gTB1+NV9qJ3kUXdV3aYv/8dtRMtmJd+q5ROQppbej8kpj+76owcmyDiKXMTtidlK40t/8mfVj29g76tpq1i0z/v9K25YFD2h9W5P5OxhLkVL6TDzU6nkoyreVJO/9w5jDZ536UVXFo8DwNp0gFZqE5zn0v+GLzE/uCbpOotTw43y3PFUOe5T7ShARMYJqidjjBNgTSpoTAS3AHayAHWbvwhyMe9lxStF4s/w8p8v4LafyRQN/XKA63JkhdyI1694qIq2oxT7x/bV+g+Gg3iiS7nVITkX2Kki5ENrAHfZQ+kaiVVsJhV1is64QnAkPDAoynicfIFGTguK7jh+GinbLvXGSmrJYU5EafApGk1uBC2K84XwPix7kyY9aw9axyixITyqxyydRB8TU/CUIpjQuSi/1DauzYwY72IbGlUyy4I+HENSDzD6QLt/E4tIeb4u8yjrU7g8X4jvltyC0KvKTpjysblJodfyyCLw69UmYCN/Nadh7zbsdRrbpecdspnvq+uwBsBsUSnDGQXPDpwexkosH4/b9if3FDgpD/QqAz64EPUCMkin6T6YNiqTOFMm2c6fshsbJzUc5yl1DtHCZK0ikLNHCDiui+DNXuB7RwCn09+UtI+aJba5EM7UzVwxWeirxbt2M5ewJrCFO3nfmW+6uozKNgwWtD/fAiL/9fqAXnH809rVjZgBa8xtxl71aiH3Kz8JoB1A7b1qxysA4JEb4h50GG+kBBnAKBN6X4PRk1rG9vsfhQ6ql1a04CO5/nPzlh+TziKLlmdbvcpzgcSN6IYnLDArPm6H0nPda6fV4+APYbIzq49TFEAPlnduHM8BJJUj4lLnf2Dri8brrLfqyfVc6Y6HEXGazXYx1Q8K2Y/RmRjHn2V1CqB5572CIbkGPZ9BjO1PlQegQRNQCFdPzdZixxPya8e0EQxY0vF47aNjjdVEvS5veyHGidf5pwnkqLTdvpr4fUuyPtQXB465sZWnviKe2RgrWU06nRhnCIaKvmyCFxTYqiiUbiQOQvqXduQWaP3a3xlTU7kfxe+6Yw3tKsEjwVfyntyHt+wwf9An0Sr75BSNBfslZzmLJPqkN5ew/9G0aAb9cRtkUKB+E1oVILxsp8kzf9OXjAvJZMx2sRFg4lAutt5RWhBKv80GWerCnsu1Q2cneOtkUbO4ou4RXw9XKeqOIGdqUiM8eed/XiOBl7VCQohbgXE4RdRgbU8X1IbyUzdUtncDLK1ZuEbf5PhQ+r1Bd5qnGxTCGtk/cmLSijPp69tC0DJnpG0BGo2VSfsZf/VAv3J/zt1LoscaNElQ6ctuLgTVOiVmAEHOpv8q0mGcldThg6vOuQUc5V7J9Pf3zoFnI3pfxRL/RCxE0xfImHBiXQcqThn3LWcaRGHlrYYo3JFtKFHt2VycPH0GZuDUJLuWDiH9aHeMcyp9OJUX+pkldaba0TIryJhfGvz6F8mlHb1cjhcSOLrv8aCI6JT1JAgniIml2VF69TolH9Ce95ysLkv0DEmVO37KfuVPESHsQL0kRys44mfEuHXBvwRW1FC0wNIuoSGNKCvi2uad+HscrnVVu/BxdnJURLZy1LH9IXkb1fblOdeUkMucUuIysab/0grfaUc6GkJulBgNJyubCNu3l8nTcUwdn7CKov7cBjy8UjEcSwnNs6TFpDklIA7W6eZdyYfPTV497Qa1izp4TonQKuKvgCShIt6gmev+sc1NwoF89ru3D9FFYONkJIF372+MIxUiAZ9DOcGeSHRkWqY2CdD8zFzuNl2IMnsRmwT5gzBVnyr22SwAYNrJYww8sVBpZG4TKSsfw3tvRGGwXTIsGWKjHOrAg/q7PtMlFkEg2ZqUNDtj0pU0vYvldLJ5QkaB9HkOH4Y2VDoqwGaeCXTuxMdl+fPsoG6JofOko9/lXGJvuX68vVO6I/n16izY/peu5qvxnF7co3f5gDj8KyQp0SwBSKdAyaLbtcBTO1JjomUYy97Hhzfd6MAdV8S0ixc2kSeH1dfDnch22m+XyWM/U37qB2H4T/20yi9qQCGBOffg5s8+av0NlH3BBwiA1+Z86vv7ZGXB0CSFoJ4NPvwmqOAPFf06yUB0sb+6m5pwteVLW5ZT+nP2ytxAAAAA=');
