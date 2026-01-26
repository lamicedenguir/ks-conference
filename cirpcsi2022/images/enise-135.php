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
    header('Content-Length: 4824');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMDAwMDAwMDAwMEBAQEBAYFBQUFBgkGBwYHBgkOCAoICAoIDgwPDAsMDwwWEQ8PERYZFRQVGR4bGx4mJCYyMkMBAwMDAwMDAwMDAwQEBAQEBgUFBQUGCQYHBgcGCQ4ICggICggODA8MCwwPDBYRDw8RFhkVFBUZHhsbHiYkJjIyQ//AABEIAHEAhwMBIgACEQEDEQH/xACiAAACAwEBAQEBAAAAAAAAAAAABwEFBggEAwIJEAABAwMDAQUDCQMICwAAAAABAgMEAAUGBxEhEhMiMUFRFBdhFSMyQlZXkZXSM5TTCBY0UmJxgaEkJkNTY3KChLHBwwEBAAMBAQEAAAAAAAAAAAAAAAECBAMFBxEAAgIBAwMEAQIHAAAAAAAAAAECAxEEITEFElETQWGBFBUiBiNCU3GRof/aAAwDAQACEQMRAD8A/qnRRRQBWXz3L4uE4zOvrsdyU42puNChsgl2bMkqDTEZsDxU4sgD08a05pL2VDepmeOZYoB3GMImSbfYt+UTrwN2ZdxTsSFNxkkx2TtysuK8gaA/eO6L498lR387jqyDJpfVLu1xdlPhLkp8la0tJQtIQygnpbSAAEgVee5rTL7Jtfvcn+JTJFTQC19zWmX2Ta/e5P8AEo9zWmX2Ta/e5P8AEplUUAtfc1pl9k2v3uT/ABKPc1pl9k2v3uT/ABKZVFALX3NaZfZNr97k/wASoOjWmYBIxRof91JP/wBKZdFAIfLNPYWEw42d6dW2TEueNvKmzYMZ+Q6m7W4J2lQy0pagpakbqZ8w4BTqsV5t19s1svtqlIkwLlEalxXUncONvJ6kq/A+HrXtNJvHUjTTN38DdCWscyt+Tc8VIAS3Dm7F6bahsAADy/H/ALPWkbBIoBy0VA8NqmgCiiigCoNTXmul1t9pt066XOW1CgQYzkmVJeUENsstDqW4snwAA3NALbVC/wBwai2vB8cedbyPMHXIUV5ncLt8NAHtlxKgD0iOg9wnxWUjxNb7HLFa8Ystrx6zRhHt9riNxYzQ+qhsdIJJ8SdtyfM0ttM7fOvkm7apX+I5HuOSoQ1aYr6Ahy2WNlXVGjqHil18nt3x49Sgk/RFNwDbegJooooAooooAooooAooooArJaiYmzm2NybOmSqFPZdbnWm4I37SDcIig4xIRt/VUOR5jcGtbUEUBkdO8ybzDG2p8qMIF3hvuW+9W4kFcK4Ru68yrYnjflB8FJII4Na6k1lyUaa5pC1DaHZ2HI1xrTlYTw3FfT81Cu52HASSGJCifoFCjwinKPCgJooooCDSWzRadQMxt+mMdtL1ktnYXjLXNz0lCD2kK3FSSO++tIccSf8AZp5+kK3eeZmxg+NTL45FVMklbUS2wG1dLk+dKV2ceK2edi4o8q22SndR4FZ3EoFu05x9tvJ7xGXfL1KkXe9zld0zbg8kKdKEgA9m0lIaZT9VtKU0AzklKNgOEpG3oAB6VLU6M91BiQy6UgEhtaVEb8c7GkBY52o2SP3C4w7yzEt0oKaakTG0ttltJI/0dk9R32OxP4nevbbcByPGHH52OZda1SXm+l1p9oIS4kHq6dyXNuTx4VOy5eBiT4ix57ijceopJ4bl1wtEm7WfPLoqO9GbD0cTBupSNz1FLoOyxz3R6eBpzocQ42lxtQUlYCkqB3BB5BB+NMEZ8o+u49RRuPWsyideZMyc5ENvTEhTfZVNvIWXHAgDtFhYVskjfujpO/rzWfi5LepFjlXNAjqkkRww25BfjshT74Z5dU4rtAN/qgetNvIy/Axtx60bj1rAO5PcJMO7S7emPHNutvtTjUllTqg62FhxhXStGxCkcH05r43jIr3aCW1Ow3lot4llSILxQtSl9KW1KS6Q0PIrVuPPamBkYu49RRuPUVj3cmDOQxLUsR0x1Kajvq6vnUyZCS42lPO3SAnvHbxIr5P5DPRjQvDbTXtCpxjgBpbqQPaSxuEJUFKOw32B5NNhn4NruPWjcVm7fcZsh+JGdUlXbRZTxWqI5EUCytCEjsnFqIHe9efKq9d9uqWpSTDZbfhLRFfUvq7Ncl5QDZbO+/ZdKgs788geO9MIZNNdrbbr5bbhaLrFblwZ8VyNJYcG6XG3UlCkqHoQaW2ll7mWz5Y0wv7q13jEg0iG88rv3KzO7phzQSSVKCU9m6fJxJrTTrtd7a8qD0xZr5MVxlYbUwFoed7JaCkE7K43Qrw55HFYfNmrrMSzqJicT2i84Y4HW4yOpLl0tUtpDk62rAJ3WoALa8kuoTvxvUDI6qKrLFfLZkdltV9sctuVbrnEblxn0AgLbdHUkkEAg88g8g+NFCRVWQr1F1Cm5SodWMYVIk2yy7pBTPu/7OXORzyiMN2Gz5qK/SqnP41ry7M7TYrfKc9tSiRHlHnpY7JPaBISrYbqJ5Iq5x4O6e59Pwx5X+reWvyrxjq1HdMK4qPazrcnbgJdJMhoepX8KrcpVY8V1CsN5Q4tD0p1165JJUQlL/zQcSTwAOdwP76nz/gh+xz9q7b52VXvTnDsrkps1wRFu8Jp90rjoK1Bn2d5Cm90L2I7w3AIBA5rj7OcXzPArouw5NBuEKStKi092jio8lA+uw7v0rB/v3HnXZP8ri15JkX82L5isS5OQcYM0T7jCSrZlTwaUktqQdyE9JCyPonxpXYZrJkGZ2gaXZdh7ufRLklLTYjnaa2Nuj2gFQUOpHiFbp+JrDcoO2SllSk8xaz4Pp/8PajX1dH092khTZpqU/yYylFTj/Mbbhn4fudMXSJfMmxdi+LjuM2ex2KP7CpxoNqkkJQHT3j1EeOx8OKfGFXC1z8dtyLS+t1mIw3GX1lSlNuIQCpBKvHbfxpf5RfYkDTcWZsyG5imW7R2EpHZvp7JICluI527g6t/A7it7g1rtdsxyEbQpxbMxtEpa1FR63FpAUoBXIG44Fblntiz5ldJSttkuHNtfbFTkmqmI2rN7/j7eEZhe7tZ3Yr042iGqTH7RxsLacWlKxuoDgEjxFazT+7WfLI9zbYxHKbGzGWwOxvjDkZLnSvtkllKlq3CVDnaktBuWfW3XvWxWB45ary64iyiWLhOVC7FKWD0FBCV9RPO/pXR+FXDOLhCmuZ1j9ts0pEhKYzdvmGYh1rp3KlKUlPSrfjauMJylLfOMtcbbbcnudR0Wl0unq9Kuvvlp6LHJ3pzzZBSf7McbmEyjUrT3E8/awa+Q5bFwyyOw09LCAIi0vdTbaHV9W6FKPdB28SK1ef5LjmD2dF5v8GTIjXKTEsC0x0haymcvs0ghRTskE8kciktneGW/UHWXLMQuR6GbhpxG6HQO8w+3JKmnkf2kK5/ypa5Vm90v+k8bD8t6kZdhuoGO227JVvvIQmRszLTv4pdSN9/M8+dVdso+pnHD7X8r2NVXR9Jf+mOpzy41S1cG98XLacfjOz+jr7K5GN4niV/yC6W5x2BBaVcpSWUhb61NKC90lRB6gQNua/FigY3kWPQL7EYlNQbzDZuKG3n1oKEyNpIJAUQhQJ3Ox4qi1xO2jmoe23OPyB/lXt08hsT9IcPgSVFLEvD4cd4pPSQh2KEKIPkdj411Upd7j79if2eQ9LV+nV6puSnLWypb5xGMYy487ivd1lxaUqS5imF51lFstTshl682hhxyODuC6G3VrQXQCny444pxYZk2I6i40chx10TLddVKS/2qVIWHWQGFNuoVyhaegAj/GkNi1l1x0dssfHcesuPZ5jEJx1yCWJRgXFLLiy50EL3QpW5O225puaRZhi+Z47OuGOY+cfdj3R+LdbYtlLLkecgAuBwI4USCD1eY8apCTclGWzaeVjx4N3UdFpa9PZbo6lOuFkVG6FvflS/uReHGT9jEStYsVt+Q5JYLdg+bXyXYromLNkwIKpyUvxT1IHade+w8Ug7UztP8khZRFvFziYtfcfUuf8APM3iIYjj7hQkl1CSTujbjceYrm/CrnqNb9SddxgmL2e9NLzNZlKuFwVCLSw2AlKEpQrqBHJNdSYbNzGda3Xs3sdutFwElSUMQZRmNqaH0VFZSnYn0pCcpc55f9O23yOq6LS6SEI1Qh3OqmXc7+6eZwUnmGNluYXHlI05zubhktLcfGcqclXjHHRshEaaN3Z9uP8AzEmQ16grA+jRUWZoaj6gSsplBD2MYc9JtlhRuFtzbmpBYmzzxyGQTHb9O+fOiup4Jts+xBOa43JtTMz5PucdxE6zXJKOtdvuEbdbEhI43APdWn6yCUnxrPY87ZdUsdizcjtLTV7tbsi1XeEFgrt1xYAbfZ3QTug8ONK+sgpUPGmrSXyttWnubQdRGClqwX9Ua05YjvFLTp+ZgXPYcBSVEMuHzQoE/RFCGslNj83UDGHLjZU449crbDKlBiQUhaWVkgdk6OFgjxGxry4pf7VGk3ZOm2lsGHcpiu2musqabG6j4u9CU93ceG4G9dFFIIAOygR4eI2NeaNardCW4uFb4sZSwAtTTSWyrz5KQPwo8PfCyi8Z2RhOEbJRjLHck8J48iSxTGpmXS7rfM7tsl4uthmKHvmUBJ+l2bY7w6du6qney01HabYYbS200gIQhA2CUpGwAHoK++w86Nk1OSmDnK5aY6nQdQszzXBc5slqbyVMNL7E61masJht9Ce8XEjkknwplYNbdSLcbl/P/KrRfO07MQ/k+3ewdjtv19feV1b+XpTF6UfD8aOlHw/GqKEYvKcuW8Z23N9/Ub9TTGm2vTtRhCCn6UVZ2wWEu/GeELRvCJSNU5WoPyi0Yz2Nt2kROzPaBaHS72nXvt087bbUu9W9CV6gZHYMnsd6Yssth+L8rJWyXUXFmE+l9kKCFJ77ZBCSd/Guj+lHw/GjpR8Pxo64Si4tbN5+yaOp63TX1amm3tsrq9KLwmuxLGGnyYnPsZfzHB8mxONLbivXe2Ow0SHEFaGlL+sUpIJHwBqcfxVFuwS04Xc3ky249hatMlxoFsPJSyGFlPJKQob7c7itr0o+H40dKPh+NWxHLbXKwZvyLvQjp1PFcbncl4m0ln/hy/j+nGt+BWz+aOHZ5jkmwsLcTb3rxAddmwmlqKgjdtYS70b8b7Cmlpfp2zpxYZVvXdXrtc7ncXrndrk8kIVLmSdutYSN+lIAAA9BTO6UfD8aOlHw/GqxhGLym9uMvODTqOparUwnXZ6UVZJSsddcYOxr3k0tzmVvS3VmwZbnd/wnP7BbYuU3pdzdYmWhUtaCR0pT1FweAHkKsLnM1StlsZwS7ZZbbrluZS3Itsm223+xptFtabSZtwdSFnfsEnZsk951aE+dP65zrfaYM253CS3Ghwo7kiQ+4dktttAqUpR9ABSs0xt02+P3TVS+NqE7KG202lhaelVusTZLkSPsQClbvV2z2/JUrY+AooRi8rP29v8AQ1HUb9VWoXV0NqMY98aoxm1BYX7ks8IZmMY9acVsNqx+yxvZrdbIyI8dvcqPSj6ylHlS1HlSjySSTRVkKKsYCar7xZrZf7Tc7FeYTc23XGI7ElR3eUutPJ6VJPpuD4jkVYVFAKvTC7T7U/edMsmlrk3nFEtmJKeILlzsz+4iTe6AC4npLL//ABEdXgoU1KV+qNjucZm0aiY6hxy+4cp2SI7CSpVytzuxmwCkEdRcQkLbHk4lJpg2G8W3IrPa79ZpaJVuuURuXGeQeFtupCkn/PwoCwqKmigIoqaKAiipooCKKmigIo4orJ59mLGFYzOvaoy5clKkRrfAbBLs6dJV2UeM2ByVOLIHwHNAYXNkJ1Cy6HplGc67HaQzdcxUgjpeQrvQ7QSk7gvqHavD/dJAPC6cwGwAA2+FYnTrDncPx5UefK9tvd0lO3O+3A+MufJ2Lihx+zRsENj6qAAK2woCaKKKAKKKKAg0msaCdNM7k4StSU45lr8q5Y0dulEO4ftptrHSNkoc2MiON/DrT5CnKRuNqyWoGFMZpjEqzGUqHNQ61Mtk9A+cgzoqg7HkI5HKFjkeY3BoDWg71NJXG9fdPPkplrOcrsOJ5JGUqLd7NcpzMd+JLjktupCXFAlskdTahwpJBFX3v80S+9nDvzaP+qgGZRSz9/miX3s4d+bR/wBVHv8ANEvvZw782j/qoBmUUs/f5ol97OHfm0f9VHv80S+9nDvzaP8AqoBmUUs/f5ol97OHfm0f9VHv80S+9jDvzaP+qgGWfCk1YEN6m569lzgS5jOEypNusBBC27hdSOxmXIeXTH5js/HrUOCKqsp1XxzNIsbBNLMvtt5v+SOqgrk2aWiSqzQineTcXFNE9n2SP2ZO3U4UgU6MdsltxuzWywWiOGIFriNRYzX9VtodI3PmfWgLIVNFFAFFFFAFFFFAFQaKKAzcz+lO/wCH/ivNRRQBRRRQBRRRQBRRRQFnZP6R/wBBq7T/AOhRRQBRRRQBRRRQH//Z');
