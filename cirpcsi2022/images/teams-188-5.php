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
    header('Content-Length: 2908');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRlQLAABXRUJQVlA4TEcLAAAvu8AuEFWH4rZtHGv/tdNz5RsRE6A/xJ1HaiV+jKAKDdWC3pZiStk/yc2c6yAYSHOfLHZ3tZx93/fllhmrulp29u0UCOEXAF7U/h51ZY8rnMQhIPLkaAqiPDhEZZ6wEIYPQIAGQLiOcBhBADeGsJmzr4Hgc0CGg86iITpCJLGNJEeS/LdU6/+qjMi6BaTZ1tu20d9sTi2FiHtjYhgf4faB9PSyhlnQbE0WbNumY1Xatm3bts0v27Zt28azbdu2jTbiZE2ApOz/HzlxgZTeO9t35z9bKNvSe0+2pvfkSjgm4KGXU68W+hELHXZ25r9D57QOxgTHHDn1qoA7NhCBEq6cOeIARysiEUHvVQVXVLTcMZJbRNDRhALucRABFCNtNOREv0UJZ2zw4GMfbisCDzxo6IwWnrFBFYCBmKIYyBNVXLk6DJg2bLr/310NAieFLABAmlqp9Qvv2KfutlsRXDBWsGSIC3hCsW1t2eLu2txpZIfE+v6MRgbgjSm4W3QfAc01MgBrkNxlT4Ds/b/3//eeqT3Le+1E3m8vv7he4b12YtSejWXv/2YhmmMYYRMWfWDRXxhdx+gGRv9Y9CmtLdJazGJNilupSYiyK3Nz/OgwZACEwqKoqurycEDx2+XQfqMixypbcSfs+QIABVKAEqNYW5ZDQ9g3W4lglK1kkplMGOqcl+QertI6v8LCJVvJPQ9lnrperuEGv3quPP4TeJT5GkDuaVXtsXQEbvZnDosWvspY9Ntl7WWw6DZVjDmE5oGm9nyw5pO2MxYPtsLybIWNGUugnIKNwVeJgoHCPg9MNYKwXBFHFPFAEc/18DYMFyFMnrFSZARhJU3prbFrk9tptyZmyyE9pCQhTAgI0bbjCPqycdsNvEty4at7IqTg2tnfgKufHR3/NtptmqZtzOYOPcSUwHpFYLYNMPWtIuyY8NH1khhdrmr/KaC7jiZbaNclRkcbVW7YGOMJwjUVd+EBtTfDKKPe4Tm7MXyTdh0MIaOP3ZYxtjD8kfwLZRbYmzyPu/jVOmZs0K7FNP6l7XLGUQ33X00icABv8t0NMuRsgLBkjLl6RdCNW2sOpMZoWmWLg70pcd11E6cinrW5uu6u7nWYA+k1KlMsP1MsJUvCj++Y3ei1LqnoK4Lae4AhFO3F5PGDgwHJgUmmHK5jLJglmJXDG6dCkiQKR4XR7ex6lXWGWahZInb5e0Xb0PdVjgF2HWLDpFykuKhJYEZNZPbs/Px8owqfcFzOOd398nrWdYZZarIVXhSNkvBVhwPRks0mFX8G5fTKPX+uV0pHxuCYUYG5hqF0EyvQTSrfpAJlpWxQFMt6wyzJj6KRp/2qXXCtzGJQnVrQUUPSURNApwlbo6MmAHpC6nJRI/mhlWCphVMRaxWfEsJPhF6eUwUFusklSrIyoHn5/YrsBsPM/zcvii8r9/39lSo2lYIcqcs92fyTjyIbxfZSNJlrElfELmFKyPFCNbWtWZAWhnRy6MwUPIq3ZGUBQJVq2QgmdUUQ+5gPQkz9eV8//rEWWhVwODpqTSENjEJGxBqLuIENJKGOCcE4bDRlSW3TXP1LWXMoUDwkR/5ND5tYFXHz5GFU92iSQpevU4hYv7E0qYFKQBJiigPQnBWhdiLHYe2I4t9izUC2VLT4MVfsFbED7rWKDRRXAzSa5AxChhuI0wVugDAwgwJYDgNhy2myi2x7j1sejd8/5YhxlgBM7ZFiR2pVAxpkoytOVfIChGGxmPO3IexFumYh2yesLCDcbOM2MRoa9NRH+v9DmB+crhS++vn986pDKYh36mwgvVFM8v4D+nYbN8U4atobnYuGBKUUMsvi4wfi74owiM62GDPXP6W4vE11PZMav0o8GlYuEL653cb17b9AO2VCRQkIg+RICCd0TGgG7gpROAbHRUTikWtvkGs4wc90NSLjVbOX08ag/i2ZNdLtcO+7tbi+c71ufDmN42kce9AfGrdx1zpjk5AUoY3Ex5CZscz9BTVz+zLPhC7QDxYHmPre+68S7Dae/FEEQj8Y1sP/6zz8v+5XxIQJi4BmC245JIC4EDg52IhcGH17xtwuuGNOV+/tEzSCB5n6QfFvsmwVVHzyGob0xtjTMe5rgzr26Rj7dfTcZ8KESnEAyXs/s6Rpkwp5kSHnxrjbNv5pgTru11bS894SxocHgT8KbHbyAkJC7UIRYwemiQLDWwTJ7yFIe49B6tQB7jnwmwP/P+e4z/O5eN2bm/eU8Iaht8cHf+5mTz/dOFlBr+HWwGdpXeTYzEMZlaPSXEp1ieCdY4rjFS8wuaH1qIeM5JsPza97BmKNwqYRe6G8DDN3/G2xyHPmlmGW9+kHkQJ4Kk5VFv7Tm/n+2UG8PL6eC7qYvzdbAVOJMHQNAyJJZqZDoUH5NLgfMAfuo1HfmdUul8s58js3cJ9dthy0nxa1DyByiibwyqDAIxh1OTzmBZPcEbu8MZ4Ucc9UOILAIDkQE5NASMAweV3o8t1w5rlcudnnDbcrkhqWW+6VhCkiRz28osNDF3tF0JKKbhBoBkhaC+AsgQQhlm7nVkmey1WWfUYEcR05abm2iCHL6zh8dF2vTbZhsF4qiK/rfYKRkyl+I0U0xMkBTDZ7MAkS6nrejHm6SpzO8uyuCBy7Mg3G8pvosUMbys+efd8+EJ/MNNkPY5CsHcq6v9qeLy/anJmQ+MQRmGkwmln/sri4+OVjhp4CxF4N6bMko8DQLCYNdzJQw/VH8iYbGpuSr1XDZ88msTNuVMNRKW7xOjXPyMaQr4XQu8Dk65Qg1h8suZidElPNAUjWavy5ds1dYJriCIDelY9SytqQGHtF6lgzsGYskSrG0bCKkyJHE+aiLk/kc7IS9kY0RygCCkdcaoZrUw3WmnfGFq/o8HCaElf/LjS7ImESiu6SjVpERy2DUctwgeSSMOE+zyZODURPNQ/SgI3qHauVAU5GKgv/QXsBx39d3luKWJ606kmoq7Gurt65apkiWi1jv6ozUL0/GvQHL2NPEEORYDqHYD2lIxfkBhgSVTxAgl2vH7nVt/9UbfuIV92+2hm6cUnImhJLBITODJwSt+DhXNBtHeMJwg01DJNwt+pjZMMzumyyQ40zRJibMVGnxF2QsqQC+B8en87M93tQ3tkCkwu2iv1t3XiugZ2EXNPNiPtuqbNBWB3gzp07yiAqsPD4dI4dpmAMb2/5P8mdNLZxfX/rLgxXIWz9WYLe6uwbVTX+lTGovEf49evXylhUEOEKGJRKVAHKAbck3J+bKUwdg6lf23GtHlKTbz5Nfr0uyUZNAq++6zhNjSt3LFqbYKrB3BIyEUuSQDkgDin4/4eI/v8QhqmOEGYqWruijSpiSBF1mhZt/oXR0083Tgl/AGAgCMwPDKYPnjDHUuAoB8wGk0eFmQFdZfpA7vwhfCAIH/WVK1BUfDjKAbNCsUMVPW7Y/Yd2h5kJDEM4yFQksaeUA2qTglFh5xdvGy47H3dcPzHvB/ImS0hVgXJAHVD8clvk+CE0BysUxKq+mA4DmqOFo7hWcCgvQtlgdEpYSkkslMNUcxEO1nz1A1/5eSLLvHDTHA835a7KA4pHC5OMcDX1lY/M+5pdNWS+4yrywldb4SCs9zzsYmhQHHm3IiasxeRYwv5knODPoSCMaM3Vz1TYhbnZHNUJ24uCeS7LMl95PKO4ms3RRhhsK55kPvtXM+Sp/j+S+YGrRD3bkV14PL9iR9goii/H5nysVqrqznINbg0o/v7iMP+liVP4/N5NQtmNbq5Sa80n5lde/54CIkapGKVhlJSCVVz7QHO46JI6lwxB9iZpYffHj8KZ4pK0RS0D+hkwWAKNm3GZz79OPLL3/97/s7YDAA==');
