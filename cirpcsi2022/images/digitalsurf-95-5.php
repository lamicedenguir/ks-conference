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
    header('Content-Length: 1392');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRmgFAABXRUJQVlA4IFwFAABQHACdASpfAFAAPjEUiEMiISEV6XbwIAMEtIAK8g/m/ZZ/b+Uo9lPMA6TT9V8h31i+2fmDyA7Xn9+/KDgxOIf0T/Scaneb/iv+H4wagB/J/63/yf77+MHwk/vP28ez78g/rv+X/x/9m/7X+T+wL+Nfzr/Lf2z91v8V////t9s3rL/YD2Ff1pSQALRj1o3lEzUO4SXwy3SYyedD/R9/yWO1fm0MDp/RXtgnq/ZEyTRnIqqRGiTVW/HD32hoKSIF3p/JkMqFBa5QTP0r5pNwXsGDXI9nR3DN62vD4Vyy4BnwPNjNTqf0xbfWe7QAAP7/mICC5wEZorbeZSY+Icj0scXNqCNSSaSw/Sb+oQ6UUrmJuvRyK/0qcyQv+F/pj5xzPvUgO9vv/nBQJaA9E8pkGMaKq35nNC3zRNNB++ZRJjov29/t/VtHNI3yq/fJF4nyuuM6ovq/4NTuxOj/yvOA4fJhpMF+/FNC2IJSlpp2lrCICaj8jQayXl0+aNbpTBcprsa6CnUC00eF41YLA0shQI68lyeDxygW/+DymdPabVyqco8nFHl6rL87Nz9JbJRh98lABBMR+y0IgW/XPd01ulwonYyJzU+PNufeWligzYM6bEQscC40pnlVs6b9skAlfimqukKc8ydGCzTr1BT0c02UjA4sjhZ0ELQU4TQ1c6P/AvV6S07Nz4cKEporgcDLyiv8vIGPDLvQ0Y9BQp4LcVjc5V45czreywXWasJ3Xo2e2JlSxfx9MtV4RNKw/v2+FuRWeginXP1DS8/kWqcvwuY+wwf3CTkE902Ovb21hLE92Gsy5pLs45myirFHzae00NJubO0Xa4j6d70nujLdy6T58ENHfdROOIAdYQZeTqF/9oyfzplYxY7wFYQgnYxcedRRS6C+hpUz+oWeDW5IFgnRLatuycjH+k0+c/bFnthVueZuFfn4atubzSFjNXCVs5DIwG9jrcQcEOl37YAfyXSvTFKbwwgaUpc/Vz+mOs7/05vf4aqdZdU0VheKsq+tapWvArd9LPVdlJPfFRGFF+RexBjIH+Pnhq3ijFjoNNSN8o/laqn//rLMjDHASKf2Vfe+HLW31bkGpuIwDi5Z+SG6aDD9Cp1+9lZEn/DLewDLUpFFb1b7t5OHBrOgxTjf720v8fmcnwwbjayDPyJBTav/zSiACqopL7gXP/4vR9PszUFCujPBr88XKwUnUluFZqZ467WgoW8YAWuDmMAue0F9Mi/8EYyZHfy46DXxrzs7/9Rp4M+NQLsKz+bf7j0CI+2iEJTdrpMCL/50rlt3zByyt+/ZDGfxewE3ok/q1b+mfejfhPzR5DVqa0K41gQfX+VLU78TXO5ADxfgZjxa98KnCxgRlYDJHoQHWBr28L6qxUsEl5mkryJAvcYk3/G5SHgLrgHJLpQTfOYLN/5izkGStP4wNn520Ogq9MX9YC+eiW2fpsGMDzqi3PvqKpyz9iA687f3lvB677lHkEk4SB4jna5Z5L4+s/T/bqQKxf/oelyu1SPU7N9Gk2Wa3eQ9lKol+HS58VgZ08ZPiLrvj7MMi8chOOQGW73OHvMAAbw0dE9lcEhVheGMin3b+VAq0VOmphHqIT3+WBTmNG65OoT2cvGOlFZ9o72e+6CoMdRxFMqHG2+PvqLmxdkhwahP036s7QRat/vSkILJ1CkX/bJiIuX7fGXKToexZINwWiAVWTqblVAqL3cVdFTw3iLyGxO+sdF//0POBWApxENybJqu5GVfHmlDlCZ9v3ZZR2Um2vDIlPU8eQzdUosLZdqdeVmRVSyhFcSonR8XlBwjOcsKELtuj7Cht56zAAAA');
