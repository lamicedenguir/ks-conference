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
            $redirect = 'cirpcsi2022keynotes.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = 'FE465256-5B59-459E-BDA0-7DB5ECCDD388';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022keynotes.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 1428');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRowFAABXRUJQVlA4WAoAAAAQAAAAcwAAKQAAQUxQSBYAAAABDzD/ERGCaMBi+P9mUZci+j8BHXMzVlA4IFAFAACwGwCdASp0ACoAPlEgjUSjoiEWCOcwOAUEswBnzDumbAexYXO/IfOn8Q/pv+Yn9QP1u94fpAOkz9ADyu/2G+E39tf2x9njNAP4B2xf4ToT/HslHsWv//z3yzfGvfD7ickH+K3uUAH5d/OOIftqOOS8W9AfoJaCXq72DP14QWg82f656svQ+yCLVDMHv7h7CxlgNCjcHdHmWYeeNlIIFYzhpnRO2pGiasxgnIZWvCKBxWsJbYHx2NHNu2m6ap0IskS+b1jqMlGsAhw7Twv3ZZnsXu7Dii0enhGJekvRabu9UnYDPO0jAAD+5FW9s1wIUw4Z1oqXdWekJJe8bMxzWF3/+2LQ+UD+QQhkv9dtLLP+rVc6kMmTMgsl9b7/5w8FfEYT1N1ep63B7+iPPPqusiluJh2zqOvJHQlPXUUi57uC9Mf1/MeLGMHnUvg7hFNwadhLI/00eBir3rrNy4ziU//ja/sKf9WQiC9rxntFizx5OzxOTTmrG+0b/n7fRN/Bh1S2+i65urTULNKuUP3t7j63K4fjmrEO1fdE8eVKiiauCyZwi9HUPF3gQ/SPbO/gAtfiImkfzCN2eWF4raR9x23O+grWPydncWl/e6+hhBmKSG+eRyo0R34PpoSW+po/GXQ8nkX/DdlMjyR3A1yjrVX+5kkfmesEHwGOOCSdwgT+fEYrkIC2krrRi3Kq7qn8UOhCr+2yB+57Vj1qXE9LUg2lVKxGP/u8xy5l6ogQGRdSPg/c3iX7htgikIWy5EQ4r+zDX0gp//Hx773I2XvRjcXEYkb50AHompJ8Grk8iULeaO4L1S/GGaZ5pY663yUJApyN4RoJQn7/h69vvza/AxsrV+kCeom4dsvf/7NFwiXfV7HOVcVIHrDXvHI3KNt3JzKrlDKoYHPMH9WLfnEr6UWAWR/GbyziOcEor1hoInfYNs+0YAFnD4He7LHUFV5PMrOnNGg6u+C06heHQjgeN8f4gqnk9bOJxWrTm2Gn7sTYjF+wWa2wQoAz725Uyvz4kQDbWxEZDI7CVVq/4qYsdf9zArydXhuTFY3W4dehXU9zjkHcLjAt6xRyA0zPSkHyG+QyhaDMy9QXyqTU/ePhP2a5kPq5pH/L5kt7EYcGnzLKX7Y1dM+y5DLFIWdKxduVRGToBMlDRD5N+miavpal1CGBJJbEWch0+Iv4kNjyB7tbWBdTXkPbiYY9xuLSj88zF1zsS4J5lPM1BPpVyUyWfVnEhHW9uzMyYGshPSE+C1jCCZLdrOdH7goO8WMys9lELDjJqDnMQVAqyEgKQ/7i+e/mA66tSaw2QiZQEgXMbVicP+KOl1F020Kzg+PsqqRwPV86J44y4cXxIjMj772nSZsPgWDdTmf1qIwPUCrFNu6EX9wD9djJYgRY4CL1TQdMrdF+f/xe2N6elz/F2CN3V2HCAx7+Lnz66HyPKtH2g4agOo0zl2q3P+swsegddS576xxX8A0TxlpmCnPSWLKUpgOssl54AhdoTeOGdG6+eX0xoIkUQTPJCpQ7MK+mPoMGfRsNOUFsA0M2S5L1WxPnU2EkvnnuZjgUbBV08PLIA95bbpoVoHpgS2545ZQ2a+r9G5rLdgVw+kS2S1KVYF3iDA0ZT07+cUaI7f1soRqCPWTUYAANltIiZ/XXlHiDG04tKbW6El0Fbdz3rjoEh2t3blkpngY8wQ3JRlDeqUKG9TNK7m43diVDmuaHKDIErL/Yq4Vbrwc7AidPzK5lSL/RdC2l0uyMvl3at2I1t1tUGyvW+IWgTlFg/Q6pAIYRZ0FOiYE/nM5N2M0LBpv/LR6wAAAA');
