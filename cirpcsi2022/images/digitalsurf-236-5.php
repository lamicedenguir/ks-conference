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
    header('Content-Length: 4106');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRgIQAABXRUJQVlA4IPYPAABwRgCdASrsAMYAPjEYikOiIaESGP1kIAMEtLdwtR8ge3HBrtBBk9tbdo1Ors+Pt388/Wf0H8Tnk/2m/dfoS9Hf5n8gPcn+J/Wv8B/ZP20/vH7c/KHeb8CtQL8Y/n/99/Lb+4/tr9Jvyvak6b/kvQC9jPrP+i/L/+++l9qleDf9R7gH8j/nX+X+2n5j/tv958a765/bv8n7gH8Y/nH+N/tH5I/SV/Gf8v/EfvF/kfbp+W/33/n/4j92PoG/lP9R/2n93/db/J////3eRn9zvY4/Yj/8lABI8oXYDrkQQ60wYVbhnGR2F8Jvl5kkaFYcgktU/Z5V0R4dY9gALrKDPNcnixR0r64DSkmSbB6IeFKwUrvvHOXyHDc/RHh1UlYnIh9oH6/Ypl+VXDLu6EgNCkte8dwQ6/sEzh27g/A2lBhgIuRLa3JIgVNQk3/IALKI9mcBmlqVcc5KNYzZc9Oefw74JNoAoUIh38hOV8u2JrSeVCw9yAoyIqoeZSMLlh1hyshGrxsDoYvnUvpgBzcey0NKMXQYtR1PFV74NPVEgwCRA/BVY996KfuaJijQqbRoFn++cvzbZa8toge33+bWYn1aS+m2q7rif6hwBsGrG7P1yKwdZmu3U4lS0Yc6KYHl7TOmc/w/MAeAo+x7fB9MPTX4gbxA2OnqigUvsUKVozrU52lJRKNBkE4C5/ltbge4yP/Lpu5zExPbWk3wubkIxNdyRO8DSj8xe8HJf58QI0mqLhqyeZ84CGpvHKKRwAD++yWonebj0/CSWfZudw+I7Y2632yBG8m8+ADyIqQHrn+pf58ysPDrN6xfgKuH5xctUus3YXGQKgrGs4cCZ1Kf8MzBXMBypaKTZS1qDDaLZyL0wByAfgAiyGzz9NCtoiQAl35nuUEPNpSRdtt27jtAJCdt66mS6q6QWIRQOgoeqLp2NFkERIjD6N4KElmIHjq9QY9uX/Q9uDZzZ/Eev1t74yIaMTMh+zavExCMD3z2e8PL3XddDmdeuXbj5L0q+Q1DUUueMqSILdnJzsGHdQvQ6Aqpvaf1TM799jte02URX1XKFw51Au1DMVAjjQ23eQGgiXRtLvAwAKI9A5rKRk8Xn1Jr6f9iZaqGL30d+20gEXWp7g8rfYbXF8mgDmJ4GRxPKbhnF8LBopLp9BzeJBKdfjRqR0iMkNXXUNmw0waBgnGRlU1lEyGlcMSXsPxyJienvZp2Iiexx4lE0Dxe6TTAWC4jj9/6DPoe8wRY7o7Gja4uiFBQdjbe0xCuzUqBStt22CUVhFOtvsimfqrwc9sbeBG//+fLrlIvexRjhgi/IFPDcOLMwp3w0EHy4Evvwj60vdjR+kPOFwEvWVB3bXzt9WJHELeME0PlSR5K24uTq+IvEr4BuBktT+x3mKuouIpdeKMhXHrV+2fpXorIhbAhgY9x+VtIGJU2yGk8j2t77RKEe7JjQY7zY9f8dSNK0vt/6tZxTdzPV9o+FujwVEDR2ZmAA7J43XnU8BZUOLUM4NdD7pQ1UIkqu/ufjbz7tJuyHOQ/WHkJwg4wCfxdW8sJjtqL1wOIjYa6t8kLBcjAM2EY5lCIPWUwJsHVYflLNH1qGU9a7W6rlZihcL5bhiGFO8QqM1kSsoj2LCj32gpXMQfBlfFpJ0dOilJoAFhow0pu0dDtsscFvfboFvSWHYvMXfihLBqcg20fRhVPcFnHn1mM4N2llTYMGYzePc8V6on+2+hWlh0Nwv3/2uGrVG5Nj/Estp2hBjn33D1ZIoC0NRM7DdmGKHwwOeZLELdQM6WMRM9gAma7Zlyc5CqdM+NH6rNwJ5g9IUERAoZ2zykbavcN44rXMT/tUi6FpvmfBrchxqmM/9nqraZt4VD0/QFDORwzRPGjENQ1gPXDqDX7lc7h+nGvhON7lSO0N6zyyEzUiQ1b6WXLM892J+8DTChiefCrVKW0XVthd/fbDYQoWfFt63Dijh5k8RZ5zLWqcN/44ELFcRbpR6SqOloOZV/KdupvWpgxYrGDohOaBwROla9GWWZVxsLIk4XfNTuEYOkRSgIUhw6G1xeeHQO77N/TCHip8AQxwp56uoII3aRIpzelBzgK9P+MIXLaStth0M2qEnJReAQFU4arCGqtZfxzsLRAODDasbvENttgWFj+o2FMM2QB7BdBhtVS6I7dARmoeNyJRaejvzWbzGKpB6Ivqv0wo6zRp8PD6nyhQkzPkFx8TVg6wrkco2jJC7TFfogEfjYSAySpo5EkTb7hv9mvUYGvqEGnLmIn161O0yHpDEeTj9rLpUrRynf7g6HpIRHpTmuKpxAGw2eJUbwKZaCnQzMbj4qZxDuvYormxNUvS0KWetcg2PsYsiETB6LTUOwTFAjXxxeTvTJdtuK8fxJ9yTcuxBxgM2Sh4B+H5+tTFRIv1SYLn2AiXR6kKyAownIQAGF+eJRqaBH6kU5NglHTn4REGyUzNWlzlcF5bdbJUoicKkCLcGjxcPGf98PI/2CPn0xl5xpcCAI7bWtaD7MKmybLcTnVP1Igl9SShsrku9GWqDzhddzdmQGdb5urze3xicvWzMe//fu/35Uqq5iPwHhJKKPyzDDkXAa7xe1bH6zt1q3+624XxrFJVroEEmkaR44dYO9N4vjNKHg7lYL7BwwZ5GjPi0P5kXIm4rvlNP7SpPxi1UJOhNCGpY2U9rZouAtpjspeqv0OpSMQIm0voBxuDzbeXgh8yskIw/vzykxxu5tK18jC1ie7MtmCM09pa4Q1H3xIyS/exPa47kTdW8n/zA362SU299uWjrWk3exVP228WhVY0yqF17I+l3fHAdELSrDbZGkOVhGyx+V8RbBYeaW8Urhk3uPdWFlWfAOVOQWLvIAJBwenlxAiX9wqT+sjp5lNMBbltinMM8sKlD64DTTlclYHj9nX5mw2eLwwM5jLaj06dVA6d47Zvk1X5z12T/pupNOoN/grHyN3EVUDS18XqQMvohCAQTd1sH7eqNsn2MbJgyQSA82QVIO6b0nLJ6knq4r9+Qtv5daatx7gVyrl6fhaj/kNsx0XEFeTixcNujoKIgMzzBtzEe+MJtwNnmMYs5wkU9uEnjI50HNepxxcQ4hvTS48pNY92yD9YZqlFHxPqDcauaYqS5i/V9ug5UY8xol6/6HILEyqhAU5o/TYjKFyvV58s/0B89jguuFVTWvm3ux6xnnFIb3G7xxplCZ8bV0RugJqOxICgMtsHRwrbDxUjh1m1pjt+oZqpkeaD0o0rLddrA8fT5GQDe6XQGPrPFMUiM7bL17JS+AJE9bop4Fjwu+IxKLut1Y1JuqcrNXMhzJpOrLzj/WaA+nDOBnsTJt6BIKfvyIxSQTGhGRSqQTGdJv+iWRrGClvT1aEE9K/f1OEcDOCe9Da3dc0y6QERxteZ+VhYj8wlCqeQHL/IIC9kFxajt7sG7yEJHlSIw7c6EbwpjTP8tsxN97iPJ3ewiE7LxSpVeBE8smMnbZ7zZURSktLVooDG7gmiHWf8M/GZ57fYoOuBer7zhQ7Mjp8G7xVy5Yuz6J0qYfrliIUpgb3zwW2g7guFDCVA3q2dE2SFTjXDQhOOemv91zBWLy93EytVNu+sRkpDjyuoD92H2XDQsFiUAiUX6Pvnbo9iH3Bm99vDDLVQpNYAOEyGCy1ugC26swTRlMr1NwtwzLes+s+KM1rn924aGhUrf35uCa4tEow7Xdgx+C4WiTnBp70aqHRipRZIXy0Focr6Uu4ZoKPhEDIh4D1X4dgiGbTckXNGHQYI5OQSyWv4sDYXPjqb1Y51YcV6ShWp4vqjFXi36k0oarJb4cMVAinyoCFDtCBB3J2CMZb1/HzxD7RfeSakTVRuhpGsGfjBcmuOB5/ue0kMhgrwiXtuK/A1mn2IgWff93JMe6R/C4qRNfFCFaS5y+W3W0/pEeIwxVGiHNAz3MCI8LC+TxavyYCqrko0fS4Vi2B/fTjhVIM6KSbF+Dac0pFwrCg1J6H1V5ev1ltYEfJdVVQfnq5nvNXY8f1V79OtHG/fnSVQrASIKqnrxOex4fuawdrqELiLXXM2z3riNsA/bbYcSkZRVChBFhFow+qnCLZoudgeDEJAVsJysBzCdA6P2v81jhBGmGMM5Pb+EN83100H0jiciPKqkUue7FQPoQn0FDYiT+tj5cq1/Sm1PBM+WTv7sZtJgpoaAtQlvDXVVX7E+LC9hnFJPj1ACkwIw2hnU7e6/L5LvYMLM9SMOphxsVNLjFJWtyOZNzD7VYVWMr3HGj3KpFBKmAW2wwhAFMr9A3mwGvdpEjPJOyK/NO61yTQqEzwLbZnodOtNgJCsguSUfLTU7s6ZjRsEzXQ9IzY8KQIq+h6FjqXT1RRZXiFYHSwKpWmN+z6o0Po1PEa9B38FYA8czl6JFizu+D8v5BQPKJKkDREoz4zEyx04TCnrjtyK97/JcRCF6I6NY1jCdwM7G9HVQ7vtITiq0d39QDjdv0wWi9/XgIRZRh+qSaAEDbo8AgJWTkyLBjVTHyC6G2cMsNcPnNHPouNGnTHzkwiuyXGFm8XrB2cPt05UEMtBVbWI3brLlxnlc+c4TzM4jexnQBmLSFv+WCUQjkP+E76mJK+K/Z4oNiAPzIoFeGIkDNJ4iNpra3lZNQf8ReedOfvj17e5we27EX5QW8s3iurvUlJSXVXEJzEs39hD+kyaqi97qEkAkCsvyBaawZ7+nR0LbrcNPG/L5WKuCWwItBWZ2Y5wXrCl1hLI8EoKmvkep3NnaxE+aI4s7hITDlbHV6Vj0NRu+YBh6EXkYi4oekHW7gL5gyz3ur3LjbkWcgT2CjWz+7g1lTmqbCnEEQnrrdfqvn/FdNZM3I2kLuq5R7dFvjpcfM97pu6XNklkD/DiNu6w7PLaqlU6Hy5KO29YcLi5LWwuZa9kXckJUSeuOsWl16BvENh+HdQT3O2fqOUo09WXMUH4Bd4zefGV22YO3aWNwKGhKLwiMbjAXX+lGXozxLd/tzHJjR0lcj+5eZ+CwTB+049kpZbv1CmQovMBsELL9F5MXNh7PCTKYNXL3sJKa+cRT5qF2oi/eiNPATDHUjE7ATWKH11nJFcQZUziPBX64X6uFA2BLseaU56v5IbgBq4r/cjqFhqJJENG+c0k3Q2fLwZ1rAMl96A4ZiZSfEUBatXfku0HmYsfXpZQS6J3tbgiIfx9It+A9Uluv84xlH3ZPGpNTT4RVL/Gk39R4YD5uxFmWfHFACOkXREDr9usWd+96BL+oPVjFJoJHETbw0RRMM/roDLNRaVlXC9bGlAfLp4zQHQzlhzu2J9QWw00cT4H0dupAnHhSG6SLQhqsiU/QzZqmvHVUHMGHQBI2B4G2XrXykO8I4tvmw1f/+XFI4d9VSn6qGfueRN8yJmMyQ6TB8ufHkm8y9vO9OtA+Riu/Px9Ffv8d/8eB5W8/04GgyMA1FJJwivSAAAAAA=');
