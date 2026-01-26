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
    header('Content-Length: 1460');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRqwFAABXRUJQVlA4IKAFAADwHgCdASpMAEAAPjEYikOiIaESbVVoIAMEsYA7I1Bg+2beANkA3kbrK/QA8o/9gPgm/Tv9YPZezS/+c9kn+M6Fbuj65+mpVH/uX4zeIH755I/4rwB2oP8P+UP5M5wv8r/0v5kcLv/Afhn8D/5N/mPyk5m/s/2AP5X/Zv9V/bv23+Ur94/yn5Z+qb8w/p/+i/xX42/YJ/Jf5l/kv7j+6n9x///1Jes79p/Yb/V1cDH8sdaq9aryWztf06wc4q0/zm4gaDrhRi483QY7cFDdXQfYWv4OJNG3yoOEMPQdenh9wJc2Jop6XfX/KLw0e1w8Aytqhwz9wKaXgYd4Y5r14AAAAP7/pQrEr8YGFBfxPa5GdemsTDmRK34aloOAk4jadSNYOG7DLrM7mtL1CeOiZa2MSFn/aPvR8/gu4ZWpa2Q/yPpy34G3O2HCgdvEqE2h3AroJbezQj/cC4BmYCmIyeF9kD4SShWHjrL5wDZpkd7fS+Y3zsb+mUAX37XNhG5JoCLkkbgrIvk8U4ON3IgmH0AG8mF5BXD98n4DsXrtCRqHT6Gu0mJOoQO7ymupgqN+KxaVF6atiaBtrapuYegVjwGNZAhRrltNLb5fLGXAOmFJPvp/o8P1zkayPG9xmINcxphLA9QRP/3gvbGcQD2N//q2/gtyzYap7uP//DXwln57UEhrBdf/tW929KPvBm3bFG4Bmhb++lfK8kXA0Tm0au/a+SwMw85E/aywb0muTWRV4UhJueaEPAUKr3+0oWPeNhW834rftMQNVDkItUqpCRHLtdn/5eliQm2N716eoEZ8ZSm/jcie+JcQx8577/DoX/8T6hRKrkXdkDeen1WJ8cJPMimLiEX0s6Hv//Ob8RtulFFkZHMH/+6ZOEQvyDbtu5fKj7jakP6/7jGuQ7RFqX77S3STN/sETtQFPKqxNDUt99lhZP/GI/JbOVgWO0l6wCGefcGGc7KWFYKpIXOiMr2sIfdGkRCoqP8OoupEgD5r0heC3xMHGJOR19oAsugP8PZetiGKazLVWctbOMZ0JF6H++CknM/j68DA0oYStQg1Nlo0yd55y7sjFe+xw14smhG6kUVWO5gGqpNpgKN+eFkNuoLjCmo4BlVY7thsY4+LFK+cDRurvzymOuQ76Vuf+kbYITR4P4txYCRILc975tBUIeH40uqgwcOIk8u0vbkvTMMby/Ftp1IsngxhHOe3ZwIqTiJ/63pHzK/sVI+rRJsfSYilQyUiwRmpz2kwhUd3Act1rP5KjhjP5sRLH09nbp6gGJFwdHc5i291QwhYP0Jt3iMMhx/GzPxOho/Gb4GPn1GHGHljPMQv/nOv5/5NqDlDSCglANtyKp7AFGBOXt/vR17z60zHrhhXohEx4euQ3ZVNfq92z0OlZ2MET2B8fLsSiCRuuiQ3W4r/WVrjv1vb/iF02vQdR7eeNe5y/AZ4lstoLmon3GUtB3zol2S3sOxbEBD9FvJ/ld0G3dkXKtuVtDG+wVNdYbg/gJ7/SoDAo+8CeLFVIt/BiS9OjKS5SMiwGazFQy6W7W9UShXD81EdS6ThlruUJ9zM/2PjbTeQEPJVNUBsaZfefee7Crxc3WQzfDrcWVzHkhA5Q3jxNsrrY+NyRHVXTFWw/Ih4Zr+gIPfFHKnSyRpQ9Yg7UIlJ9LSHDVNyQZiyAgqdPvVLvWzl+W3BVDwHMJu4Bo7QiaHd2cwTRLqJeClO2X1FfIPW9iMMorag7BfRvopEdgoz9O+tEk7Ocxs7qIWCU6E7sHm/tqtwPWtFQfFkxlvKcGZMbVb+k+3EdJS+XTM8quyXUwy2YewCewUwjJgPO9n0731QGoXvEqXfsq8SYsPFwSzAf1b8NSzB8d/KWNaOUPC50wIqDv9cxxOC0FZxI4pE114EQt9LJ4eI+/tOGBX6rQAAAAA=');
