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
            $redirect = 'cirpcsi2022session2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = 'C2F10598-BE8C-4EA7-8CF8-E110759F3266';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 1280');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRvgEAABXRUJQVlA4IOwEAABwGQCdASpXACAAPjEUh0KiIQwFV1QQAYJbAC420JIB0aXIcOp0Dyx/eftV9m7nKf7huk/1p/VXsS/pz6KvW6egf5a/sdftf6UVye6Bfup7S5JZ75/Nf2c/KTUN/2n8nMtW+Yf6n8ueYDuKeJooAflj/HfdV8aH+n9x3tr+iP+l7hH8q/pf+07Cfo0/syULfAESQ3SkH/q95oUaIGp2fHzz1qbdCu6/lnf0AyzFqf9ODoW3J8JC8Qz8A9nu1qa+SezYqVp428J98ufoTUMZdGuf8J+YSAD+//kPB+oAg7KgLsD9SWgypOzUQYYQqCVUfAsKRK5sM58Bs8RXejAyVSC8AqFns/IQ4j1L3fSObrVP/4ErBdsGObnGOAcvbKu4MAUB6JoNpDicLEauJ80yvfVlmsQj7HzQ/oMmnSqP/5bD2vffGiRfq4B7dFBR/yz0GvnrrBL8dr/Gzi3aZUb77etFbUne7i8lP3JamICszM/7PlI7lgcYz+z+3ljGVcP18xf7iKuoix3CeCYbD9cAwVzuPT443uLAWd2ALzLA7tIxYVbORt8S4DjSiO0z/5WLm1W+EuNRfK7I6COuDfF5sgYss0hKyb1olNoYY7PC7x7onSF7iGzJ9BAzDxq4D7/x2mZXtFDUA4ZSoWZWTZ7OqZDo8U/KX8BvaKnfUjHQ59j9Ieyj8InAYYkhfXy18G6cib3GYtI5t67//yQNjIdbgVkwrbOTXjxOXxk+P30fPC//DMeOqJb1JSlfBt9K/oagZtcEMQeBUekZgGbOqncunP2M2/wvwG38S/4TX8FPcAzu/qzJBX8auTVmE526+9vrNyRn8yN1xJThFYBwfU/tPOxR5do51rVYI2eDfc2Lb5Az0HKUv8DY8Dq/+rltzPn4O1ITvZ9j1+yf6jMSXagYJC3S8dzFbr0f8gClTlouELscYE1dIeqK38IjcYNvWm7vADWaHDx78Y9Rx/5P0/X3C6+U6Svf2rQ3T6ayPeJ2TLL7W/xKsFkHZd/Upw8jHD/5MtR+njHxj6uR/XrivkVnxlLd8PD1L4yV38SjuqGJnd0Z0kjhtSBvDRj2/Mrzb7VL88+GvxPCFyKQMEH5rziToHegqsqTULv+WgV6XkQZ7QBwEh//RalLYKceM3+IPMX+xFIYfKRb3Z54u5socFWWBVc1XByC2u9VOftW/v3WUuMyX2jH3XM898MmoBdq7KN3I3cXvbQnh38+zfAx5WDqRQ0Lc32RepqNzEGKHOn7ozP+mA5vYU371hEyY7xWe1CvS5zPK57js27D9Et62B2N/+o9c2UMpZTeeJ3yNZlpB6OJKxvzoJrf3STiUlkowesTd3FP9FVpmfGR3i/xMkh0K4hgtlh1jYmGP2lkZVuymAuY9jrl65td0yQ33vrJctVPVv8FjcVIkVvPUBRRMt8rZo6MR7x+9cDAuyA+49NO0DsfMZvcBV75wgAAf3HNo8+pb9IK58S7jo339Ye7dBvTH5UaRHL4bN/CP8ShhmFG23A3CIXFkLslJEkVoyK0mhX/J6n5N83XDbSBeiFyWrorY371R9ovXKVCd+/9jb5DyILyn/1IW5Vl3G20wYn/evcXEbZPcj1cfGcEFRPv3iF2BPZH+FbgkYAjn/9kl+0qxmbj73uj/qdeoUpXZ8sEhYFfE6hhX5lVJih4b1r8AAA=');
