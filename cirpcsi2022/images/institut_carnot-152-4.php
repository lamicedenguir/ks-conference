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

    header('Content-Type: image/jpeg');
    header('Content-Length: 4245');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAYGBgYHBgcICAcKCwkLCg4NDAwNDhYQERAREBYhFRgVFRgVIR0jHRsdIx01KSUlKTU9MzAzPUpCQkpdWF15eaMBBgYGBgcGBwgIBwoLCQsKDg0MDA0OFhAREBEQFiEVGBUVGBUhHSMdGx0jHTUpJSUpNT0zMDM9SkJCSl1YXXl5o//AABEIAIAAmAMBIgACEQEDEQH/xACoAAEBAAIDAQEBAAAAAAAAAAAABgQFAgMHAQgJEAABAwMBBAUEEAIIBwAAAAABAgMEAAURBhITITEWIkFRYQcyVXEUFRcjM0JScoGRlaOx0dLTYpIkJSY0c5OUoTVTZHWCg7MBAQEAAwEBAQAAAAAAAAAAAAABAgMEBgUHEQACAgECAwcEAgMAAAAAAAAAAQIRAxIhBDFRBRMiQUJxkRQyUlNhklSBwf/aAAwDAQACEQMRAD8A/VNKUoBSlT+pLuu2QAI6UrnyXBHhtn4zyxwURx6qR1leAoDS3MK1DfRaUrX7XQcOTy2sp3jp8xnKcHA5q+qtr0K0tj/hn07939VZen7M3ZbW1ES6t1zJW884dpbriuKlKPaa3VATXQrS3oz7939VOhWlvRn37v6qpaUBNdCtLejPv3f1U6FaW9Gffu/qqlpQE10K0t6M+/d/VToVpb0Z9+7+qqWlATXQrS3oz7939VcVaJ0sCcQD/nO/qqnpQEPaNqwXtyyOOLVCl7T1tUtallBHwjO0onlzTx5VcVo9RWX23tymW3FtS21h2M+jzmnUclD8K+6dvCrrbEOut7qY0ssS2hkbt5HBQGfinmk9oNAbulKUApSlAKUpQAkAZJ4dpqGsYN8vMi/OAmIyFRraDnBTn3x7H8ZHA/JArt1W+5Oci6djLIdngmUpOQW4aeDhyORXnYT6z3VWxozMWOzHZQENNICEJHIAcAKA76UpQClKUApSlAKUpQClKUAqLvQOn9QtXpHVt80ojXEDklWfenj6icKPcatKx5sONNiyIshsLadbKFpIyCDQGRSpDSkySwiVYZzq1SbcQGlq5vRVfBL8cAbKj3iq+gFKUoBWNOmR4MKTMkuBuOw2pxxZ7EismoW6j2+1A3aM/wBX24tyrgfire85lg/N89Y+b30BlaThSlNybxcGyifcVBwoUOLLKfgmvDZTxP8AETVhU70t0sOHt5bxj/qEfnTpdpf07b/9Qj86y0T/ABl8C11KKlaiHfrLOcU3EucV9aRlSW3UqIHfgGsmVcoMNhT0mWyy0CAVrWEpGeA4mppldUyX/JndtM1q4V5tNwUtMG4xpCkDKg04lZA8cVnB5suLbC0laACpOeIB5Z+qpTXNBtKtzupWL7Kj7tDm+RsLUlKFZGCVHAAPjXB+4Qo7zTL0ltDjpw2hSgCo8uFVRk9qZNcErclXuZuaVr5Vzt8NxDcmW00tYylK1AE+rNZRea3oa3id4U7QTniQO31U0uk6dDXG61K1s0dor7WuYudvkPrYZltLeTnaQlQKhjnkVkGXHCSovoxvN2Tn42cY9dNMrqn7E1watSVe5k0rXSLpborqWn5jTbihlKVLAJ+uthRpqrVJlUou0mnXMj9VxX45h36C0pUu3El1tPnPxlfCt+JwNpI7wKsIMqPMhx5UdxLjLzaXG1p4hSVDIIpzBB7edRFkKrBfJFicXiDK25VsOQAk83o4zjzSdtI7ie6oZFxSlKA0morz7T2tyQhveynFJYhsZwXpDnBCPVnio9gya6rFZxaLOWFub2UsOPSnyAC8+5xWs47zyHYMCtPak+3+oX70s5gW9bsS2DPBx0dSRI9WRu0HuBI51aPfBu/MV+FAfz+cA3i+Hxj+NcMDurm58Iv5x/Gt7pvTV11HcExIDJIBG+eI97aSe1R7+4czXp5SjGOqTpI07npXkegL3t0nFPU2UMpOOZzk16TrmwXq86echW+JvHXXms7SkoASlW0TlRHdVppzTtv0/bI8GIklLYO0tXnKUeaj4msq43y020f0yay0SOCVK6x9SRxNfEnnnkz6scG3eyqxJwxxuc1FdW6PL/Jhoi/abm3B64ojpS8ylKN25tnIOePAV6aww6m6XFwoUELaZCVdhI2s49Wa67VqOz3d1xuDJLim05VlCk4H/kBWIwwq6SrgqRJfQhh8ststOKbwAkHaUUEEk5+qpN5ZTyPKtLpXa+NjTPJjyRxvG9dydU9nS33NRHtNyYiW1LTat0qUyt9lR4tlLgUVp8DjrD6a213Q6m4x3Y0V5T/vachG004jbyUrPxSnO0CceGazZck2e0OuLedkKbBDe1xWtSjhKOqOJ5DvrB03cJDzEiLKdcckx1Alxbami4hzilQSoA4Byn6Ky1ZJJ5aTSbXS7ObThg1htpySl1px8jZ3JhxyRaVIbKg3MKlkDzU7pYyfpIr4tl03tl3YO7ERaSrsyVA4qQ09JlyJkUIXMC0bS5Sn3QptxtW0ElCSonmBxAGMEVtl3OdFu9yWtRcgtqaS4nHFnaQDtj+H5XdzqPFOMnC02oPn/LMlnxSXeuMknNct/tNvBYdRcbo4pshK3UFCiOBAQkHH01pltSSpcMRnts3BT23sHd7BUVZ2uXby50ZuMpOnWnkPEuOP7sPE7WyFubO144HKu+fEXa46JcedJLiFICkuulxLoUcEEKJwe7GKRUoz3au9K94kk4SxpRT0rxSarlI2k1h1dwty0tkpQpzbIHAZTwzW3qXuUXe3i3D2RJQl0ObaUPLQk7Ccjgk4qoHKuef249/T/wBOzA/Hl8FeLnfPYVotR2dd2tuww7uZzDiZEN7/AJb7fFJPPqnzVDtSSK31O0VrOg1FgvTd6tMeWGy06CpuQwTlTLzZ2XG1eKVDn2jjStLcEdHNTtXNGRbLqtuPOAzhmUcIYf4cg58Go9+zSgOEZZ07qdyIokWu8vLejKJ6rE0jadb8A8BvAPlbXfVmoApWCOaSPrrWXy0MXi1SYTiy2pWypp5PntOoO024jxSoZrA09d5FwtbnsttLdyiKXHnNAEBL7Y4lOfiLBCk+BFAebx/JfpBh0uLYkyDknZefOz9TYTn6a9YtNtiW2E3HjRmmGwMhtpIQkZ8BX5+sPlJv931HbLcIkFpD8oJWpKFlWynKlYysjJAr9FzJCYsSQ+RkNNKWR80Zrs4lZk4xm22+W5rTSTk+SW553rfWLlvJt8BYEkpy44OO7B7B4/hXiTi1uLWta1KWo5UpRyVHvJNdsmS7KkPPurKnHFlSlHtJror1/BcFj4XEkktfql1PzPtHtDNxueUpNqCfhjeyR6l5L/79cP8ACT+NUN71PoyJcJYlS5keQwpDL7sdL6E5UMpStbY2SSDwz9FT3ku/v1w/wU/jU5enLSrUV+iXB6OGndQ20uNurCQpoN9YnJHVHaa8/wBoK+0cv3bRjyPZdhQjLsvEpJNapFo35Q/Ju03GQmavZYcLjeWXj1zkFRyOso55nt41m+6RoJx4zRLeKmW92p1Md7CUuHgFEJxxKeGforzO1WrSdyU0ti329UlxENtUcLcLSUGStDhGFEh0tgEZOTzrg7F0cyDDxH3Ht2fZCC8lG7W3O3fWSpYJbDJ2RhJAGTnNcvd4n+y/PfqfYUIL0r46Ho0bX3k8bSytiS9sxAohaWHzu0uHB2jg9Unv4ZrsR5TfJ629IeRcFhbxSXCWXTnZGB2Y5V5c8nRnsN8pXEjNuq3L7cZ9Q2mWrglIVs7RKlFrKvHmKxbm3o+L7bPNQrc66zDJYRvUll1W+2UFKW3CchHME5PMir3WN+WT5LoivSj1v3QvJ9FjGCp9bbJT8CuK6Bsr48lJ5HPCtczrzyasPNuG6SHC2ctpdEhxKPFKV5A9dQO60a+mU7IcYkyA1FQUrfTkMiMnJbW4tICgvOcZIxjFctOOW9Nmg+xXGUtBtXsoFxSFbzZHnhKkg9bOdvKdnGKqxRp13lt77mLx4214I7LY9Qc8pugXHWZCp7hW1tBCtw9gbQwfi4ru91jQvpNf+Q7+mvCm1Qpen3BHXASGbwt8xZD6G9pvGOCc8QewCt1KtekoU8xmmYan1QFzI/sxW7aKpCgUNryRjYRnAJqPh8N01N/7M150keue6xoX0mv/AE7v6aurfPiXGFHmxXCth5AW2ogpyD4GvzHJjaFSi4sRW4K21+2O6eW6d4gttoU2EHaHAryEkjiOVeq2i7SIOgdNx4Wyq5zmG40JCuQcUCS4rn1G0gqV4DFc+fFjjBOKkt/UZJm82ukWqAggKtVldC1cil+fjKR4hgHPzyO6lV1is0WzWqLAYKlNsp6zizlTqydpTiz2qUokk9pNK5TIy6htQJNku7WoWk4iPIREuyQOAbJ96f8A/WSUqPyT4Vc10yI7EmO6w+2lxp1CkLQriFJUMEEeNASsDQukoExibEtTTchtRU24CcgkYyOPcaqXmW32nGnEhTbiSlST2hQwRUrpR92E7M07MdUp2CrMZxXN6Go+9qz2lONlXiM1Y4NZOcm7cm/clJqiT6E6a9GN/wC9fehOmvRjf+9VdK2/VcT+6f8AZnN9Dwf+Pj/qjS22w2q2LcXDipaUsYUU54itPcdAaSuUx+bMtiHJLxyte0oZwMZ4HwqyNK1vLlctWuVvzs3wxwhHTCCjHoiMh6B0tBLhiQXGC4ML3T7iNoDlnCuIrE9zDQvoROe/eL/Or6lXvcn5y+TKkQHuYaH7LKj+df509zDQ/oVv+df51f0p32X9kvkUiBPkw0NjhZUZ+ev86+e5hoftsqP51/nV/SnfZf2S+RS6EGnyZ6IbWlaLOlKknIO8XkHw413SvJ1o+ZIckSbZvnl4KnFurUokDHEk1bUqd7k/OXyKR58vyZaFQlSlWdsJAJJK18APprjo2AzJeXd0M7uC22YloaycIig5U7g9rqhnPyQKztVuu3OXF03HUR7LTvJyk5BbiJOFDI5Fw9UfTVoyy000202hKW0JCUJAwABwAHgKksk5fdJv33KfaUpWIFKUoCW1bBeSzGvUBpS51sUXNlAyXmFfDNY7cgZT/EBVBbrhGnwY0yM4FNPNpWlQ7jWTUVbSNO6jetahs264lb8DkA29zdZHd8pP091AWtKUoBSlKAUpSgFKUoBSlKAVhXS5RrZAkzZC9lplBUrt9QHiazahpf8AaHUiIeNq3WpaHpHDquSubbfiEecR6qAztKW+WiLIudwb2bjcXN88k822+TTPhsJ5/wARNVdKUApSlAKUpQCtPqGzpu1scjBzdSUKS9Gdxxaeb4oV6uwjtBNbilAaHTd9du9uJkN7iaw4WZbBOS26nmPEHmDW+qLvjMqz3tq9xYj78d5IYuDEdtTqykeY8ltGSSnkcdlZideWwAAWjUOP+zTP26AqKVMdPbb6H1D9jTP26dPbb6H1D9jTP26Ap6VMdPbb6H1D9jTP26dPbb6H1D9jTP26Ap6VMdPbb6H1D9jTP26dPbb6H1D9jTP26Ap6VMdPbb6H1D9jTP266enltHVTatQDJxn2nmZ/+dAZWp7w/bYSERGw7cJS9zEZJA2lntOeSUjiTWw0/aG7RamIgXvFjK33iMKeeWcrWcd5+oVO2FmVdLs/f5kZ5hKQY9vYfQW3ENfGcUhQBSpZ7DxxVqKAUpSgFKUoD//Z');
