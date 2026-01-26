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
    header('Content-Length: 2948');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRnwLAABXRUJQVlA4IHALAACwNgCdASqHAHEAPjEWiUOiISESOzV8IAMEsoBrrPDfN5L1ufu+3kzh5T/In+x+5X4H+ovzAP1H6QHmA/Zv1hfRH6Cv9C/tnqq+pL6AHlm/t38In9l/6X7Je0zqvXTvtQ/sH5M/th2pHkn1+/FP38v13ndPIv9evsP5Sf0/9qPaK8G/UB6gXqv+pfzX9qvzA+fPSB4V9dPQC9U/n3+q/tP7ff2/0NNSDub/m/yj+gD+Kfyz+2/mhzLX0X/I/533AP5Z/U/9l/d/yc+lX9//0v+W/dT/O+0r8v/tH+a/xv7x/2/7Bf49/Of77/aP3C/xf/9/7n3Jevb9aPYc/Upg7q7PtDAaUXwzW9QdonqTYRxpxVsadtWq+OBNMoROezuokPXzuhRvtFAdL3ssr9tygu282t2Xj3n+jlrgliThcWv9udlhjAxlY5azRR33b1QdpBG9ucV3PpW7ja36IJ0nr+dhI80ZaYYebNboKhA+pDRNZoTpBL1q9VSgl0lX6n+rEf4S6N2204gil+8NdPf4nmP4P948uB33DB0WrbvUVlUnp8LWsMcnA93dOFAD9avuT46eAsNAP7+sVxFMzXxQAAD+/z2GtEfUdivbKsZ3c+rIKje2KlUxvCrbYBRL6o/iS/t+FZsAAk8vz48QMcG54SwYhr19u0IJxf8PVqZwqdG+YJMi9O2HWaUmLQ4rtYNSSVYpdeR4MxJcRVSi/eqzHhtN6viRigJZvCa8tV2ampSZoUp85w+O9OcsDqfHePhs0UKyjX0an7SmJjbZFYadcxObXRCd39NiVDRNrZxsdDfJruXx5TvpeoNKBwMJBWRhu/dikOWsNUjyeVfqH3OQ3JmwOkKE4cigoejJxngwz/0MZLKhew2/HXdYwZfQm8JxqC/DgZ6IEpVir4JFgIaNN7jF+C+7YQlYa9mWG9qPUeJgyKMrv0t6x4dm/kViEpYxIdJ1pHnhQzYZXShRfzzkErf8ZaoEQQHWQulyf+rgM5vh2Iep66Qp3SovwXrrsC99M6qcvWgYhYMRp/gBOMSpxcuH3UPhQ1PmwvJAQuPJSLxkGf5D7GqfC41UfuRoG6s9iFfSo9/uzl09JgcXhtV8yuYcnRf49QFBe9N6By7FlO2ALHPczwvSycQ+NDW1R+zmqrfqr335a+Qeo2eq8eU8Ur2x0jmsEQHon9Ytf/xMU8TUPHGgqraNLefFwqmVX47TLrwdfgSnfRz8uUM7FC7NrK9eqvfG8jxlsUt8Np42WM0Jf8JPJPHVjE7my+j/wrFPzwtAzx9LFldaDju8Nm7J9Bx/AzVDfYZDoUIKXJqiDEzv++pnlyvmJGp6HOX3HEmnARVM9q9iRkLe7OJmgux+WU7a5TT1/C3PpUL8vGdSnD7GW0hAmB/KBWtIemIe7X64ZTM9F5IH9b82eKj5u8ZVYVERR8/E1b9Q22/k0H7niU16p3vyWGZk8xJEyg0z5JOcTuet1KFhB5XxMTPeP5Wjo/M4QWVk4ZIWuKKW7m3GsfdgzIY0o5hYd3i8Fx2Es9TvxYTNEJPybK4sY1v1eqsWrLHQNOIYbvC7bhUcveRlslGQwbtKM1fzL1A/o8zHXKrxQCVgPgAOegdXESLcrQIm3iTsRRvZyX9/Fz/BWJQY5CWRUhf3AFFsysOfZ3uzPt/Uhmm3B9jnv5aP+YhTHd4B8S9HsutNDthmtSsFf8qfVO5efZFne1SDMBP728hn2eJ1juwwcgeaiOYV1EcP0/N7iCFOCvV+QbOOhZX+WDhBDSuC3N7OqSRGYCvqtLY+X59CKCrWuEMEgwzuG++jZIN5SuiM9SHQ9aBfcJyM/NOjxA5HZlflTwamWCX/MzOeiSt6RT8fZfuuYa4/oUT2oi9eRvnIOIO1hWj5SXs+tE4hVTtefNzz2y2Ev8oYwgFYKXq7CUB44gu6U2jDIWzPf/GDpI/wmuq9vDdc6Pl7h9Y8/YZhrN7cs32Y9yzWazQBr1fLURHMc0KFvVkNffaBRvrmTyi6kq8aVBb4pzbG7mzUYKUj1kz6r6FGEI/j/GS49RHFWZGzh8nZULvFu1FfqrCZoCAb5ZNpHCUjwBuF6cOsEldgW2RQty2vQ3VWIQVf7atQkNBjaBiApx6qQcYlhftyC3Hboh2JA1XLQg3PrA5uWfW/PHgfswlucMbBn14H6Vd9z7WUCLuOznOaKTzJaJ5xw8/wzfGX+QefhiML7Wj9dNR2rjifZkqSrJDAb5m3PpIh1qvT3zG+mQ0Ba5Ok6RJ2mB43/6TAmJGDdbCpId/tBZi9yhItPt91Yn+ogOg12+dTJ9leKOHab5P+aPrJkENoEqD1LxBggo4woQyqz9oYj+LbMoxVUG/9MjLIXMYQY1tEG78hoZOt0iN+c+sefkthlwwts24uwD4O/hwwA1+RIUMsTjCJ+MTmCQn01dBF/Bttc3auBEV6fg5o53tXXf2I6TaD1cduykNbI/C7DCGu/3Nk4DiFOKhtZePsALy99KvNBv73ZwAvXKUPg6leLVdKofZNjTax12YiKyAB3czB61/7sMpLgoEdtiP1sUkJvD5BE5jIzhHi5cnRRHJD7MzHvpv42UItmHqiTB/vfRQtMSufFghDfdaoR4AYoBNjp+mjlV+uc+j4M8uRmQetx0PjWj3691WsYMUpvBZ1eqk/R0yJvNC/WGSiF3usvn1EYA2bkeIC6LPVc6rKWxMshqtqqZSAbeRf8vyRAtjgrJPL70rEYDVJEVBzyi9q5ZOyXMXKnrREIMLlO66G23xgxSsRv8iM7iQR5i2RI2HhBOaYtq1QTWpAhT+177rCr+OsVBIlaeNw33OwuNHlJlcd906rGYqCnmYOJqJ5le8NEy5QxTiraNb4lwGZkgOjW8qTNPpiwsimOVkqBtyzyaYYwtDnoB9hms2w99IaxP0zWUhIo4/Se5QltePdXVq+j9WxxDjjLi7+PWoxftWiNCLJylyYDPq9VUAvi2LPLQ+/4a+fB4+OapIj/Y/b3iGmtXbIaQ2RUraT/b+RuBfTvBUniV8STzrSErlHkSNgK0zcXxKJhD3Ic7nBgP3N4R7inHqDaoL+fZ/H+226RtiLv/D9ofSdozA0QAOp5qvf3myBQIxvZBDYNQvTCyvIoK7TKK2tgaBwy+Ow21+GZw4HcjJ9FLZQLyaR/jOjbwjMWELoUT0Xb+lA+IYTXJAqXaV3q30VfggRetytpihKECea2ZoWyToq11ntd3/0eUtSoqD6iJ591nhaupx533jsbEmNcpqD6nUGNuIwYkABw7v2hrdhdmEkakP/nqeaQq4CsPPRxHPeOK5IcdhNbMHF2oAJ8AX8hkOUv+D4Cw22hoskIz/PKxsbvpFYVxfdBoPf80NcnYAZL+wrTyTP18+qyx4czI5eXfLzfDXHYhwEu8o9pkJe8Gf/zlHpxx+0qomUA5okz0MLNmut4tzXcO8ZqSOda06jtJbtUwo9ztTaDLW4ISIwSy2kBVZsmHuLywlyoxFiFNatFeRkk6bLzYADMsST8qw/f7+QpdpOXi+7ldAqhz/rNFZ+Ihj473ZFNQOVJnnGhvTUDfHkxhNbWL3gfqCaPxnt2U3ttnP/b5U15A/vJdr3j6oLJcZuk4MHddLKeIkSp1pVwSrF5n0AABgh2DiUp/fzfzkeEJLDd37YQjoal0iNvGt2lKZf1CkYfbVbki6giUyU8BASysht7oahXD78ZFcso5cTDqKEn8M7aTO8c3ADHw3/vKR4SN1JYl8Gha1jKNlo+ugmwDesrANGnY5kED3T/mXqH1cmr3PeHAjEtuagTjZMdXo6FWGkrrfr4poWu9Beh266PckSuxx0MiTti53tyg4p1vYGp6NKskmcPyuZ6n9YZlneW/2kV9k5aRjva88s8XDsQiCuoB11oBBbgSk7JuUAAAA=');
