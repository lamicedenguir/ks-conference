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
    header('Content-Length: 1488');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRsgFAABXRUJQVlA4ILwFAAAwHACdASpMAEAAPjEWiUMiISEUDM1UIAMEsoAYqr+sHAzfyvgAPKq9hj9w/RyzR3+gdpf+E6CXyB7B7mp/AdtJ7l4+d4O0t/dskp+T/638o/MW1Au3n+K9S38f/zfIZ+FewB/L/6z/o/Sy/mvzI/zns7+Xf9P/hfxq+wP+P/zv/Gf2v90/75///q79Yn7R+xd+qK9t3d2kyJiaj3Qg+OH7X1ZxwQS6ZJxN3dCxSmIVB8zAVRv2hDo3A8kddXEbi4o7Va16l/9+Vyjh4Ri6AxQz0EnTMY5DDl96lqBd984t8Jm1OnVOp4yzkgAA/v+lCsO7YrBzCTRiR81QdnJBvN5SVSPGJS3aDu05/7ylVYYoL9W/dTjxlmoAfStaM11P0BRTeeLe7F9vk1TX/+Te7aqedG0ngnE1BCOLkBvpm6XMm3BaYTDsSUuUsw02S3ZfnpyIfltqoPmLfd2Vr18H3A55hvk0If6IcsVxdxaAXJVSbiimPz2+BljtTJe0XfiP49PUspT7Md2A7Vfx9LHKEos76zbfEnGSSl9twyQ5ZVVwKXWtThzPfLH8moXXKlZ8LqxfqrAhYhJ8vvJ9KAJ5n2rwdBpE3XFDyf0gYz2TvWFuIfOeIc6WmeO+8KG1d6j+rleoO9mRv/kzqT23IyTjAV4pLOHxcek66QPyIHQQNltUcw4cxswD/eL7uNCpcB3lpG2vva453a3dQvtx5J3l1rzkpRz61ilyeowX9wYkWhPmv/+w0noKRPi40Endp7zSAa5/0t+6e9oDrofY7mGMiy3a+nHaAeL/3NkIOsRdSYKlS7MYCzifh2b8SjTOc9ITjWYRLNT+9bdaUffIlgeFNLGfnHGlbupHGnx69b9RIxqv9Zan9RyyWzUVuFj9FiAj6nT2a2MJwJznE4P+rHvDE9vitzPgWzAdOHTVdlTGVF/0I//pq2ybpolRZMuI5P4/Bb0QtqNM2BA8Q4Tn6MPyEW2nKsQH8XBVAaVGsZNBDVkdRkHzPYFLd9/y2e55iLR7X5Zqof+j64wSiNWOJjBdlQYsLFx8xQLi+CtUpoi74Sfp4U5t+c2zDAp0X+frH0nnzqeDM4DJ583k42+AGyCtrEM6yPlAELWAiCnDZE60VhjJ/cZr/QVQtaoeGZUxr2mtazdVBiOj9x+W41oBstu9STbUH7EgQIqLEpOM4UYCqDTtObIKVDGXwZAYTspEdyvhixujS4gci6uGJcn1dFDALyTtQxWF+vBQmlcUGrM3m09k3YC6k1XZkn/cScQ/8ZIGAzDZ+KWmr8Birb24ZcJ+bd5WL1tnhhJOANhqoaNRgWbIjnHULNaDC0WHjBu/+UXgIRGD//oYuC+QMEoeKd8+2dsJZz1CEUS5k3XX+HMuNkh/+SDPz/2ofSMd6GUJ9jgLU2W4Quw5a+wzxpBrj84u1tcCxgSlE06GDVMroIKNhm4FdZAP9mwZKDe1dkuWv/PtMTEOrytC/AHNxWj1Oefzb8/FgFy3T9LzCVW1xwP/Fhg3DIoncGxTZnb/Jt5aBE0P1z5m5691Z0Zz8RrjSP63Miqjc5Yy5/ZdNB4KpaN9HOA0O2vRw+18timCfgVQIujnzLZok2YZaVM1fMnr3F9+iIWvxedT8AfyfxRIx/XbehxIEmF/rZl+rmjA3nHzyy+yOWApPHQrO2kDof9oMzI24JLU4IlWY/dLCbXt3Y+WoOVTElYCepG7NnmXtApFBRNhz+2ZH9BJb1oFuopl2m9hdYdHjvgFVayt7R4QzNBrP+lA8rV3maPljG7vljgPvUMqfo+eHpl7W1UHsTmKAva6SRTuFiHE5Anv813GBspw1ZKQ4ZSyBXT+0ZtTSA+kmn7gcZZMTCN6Iy7rxmWcMCgFIfaVZMOVIo1Si+u0abDPsX6rFWVrw4Ao4Wa0iyxKyV7jDwlKUiUlcOMyOoPYr4bljHAzT/L3cqfYfigAAAAA');
