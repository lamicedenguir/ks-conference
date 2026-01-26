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
    header('Content-Length: 2804');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRuwKAABXRUJQVlA4IOAKAACwMACdASqYAIAAPlEkj0WjoiES3AVkOAUEs4A8xqJhHcVnq8ndbbP9dPUB+znq6ehP0AP7J1LnoAeWP7K/7f+kdmnvYL/eOkT90ZjP8l4JuUP+Z6Gfx/7f/pP7j5+97/wu1CPXm7j6p/lv9v6hHtb9h4iPrp7AX8i/pP/M44SgF/Rv79/4P8V7q/89/vv8d+VntZ/Of8d/zv9F8Av8p/r/+8/Or4tfYR+3HsXfrgx1yFhYlyg7RVigmAdOfeGkHbKc27ZoU98kzvN2cjsPIg8qISVzKm9Lk8vyV2jPOvnHsxb+RLFpnorAAuCEDB4mb6xZC+6xrQ2OrFqlBEdTrbDdThgWf8wrzGufkq9zcEd9xO9gFOGbJeR+j02IeLyM5S/d/G+dhCql3VAQbzCd/gjfU5I1toYuPCP7d7klQSSUBuwA4pR7XDCxzbBKRAp6pzB4jdyaFOdfhhbMzQW+0Yu81NR+VvG1bJbtQvJ10dXu2U1VHOjo2+9RbGpJCa73RRmvT1TLDAZWJMiF/LnNwAD+/okdJdrZfs8QP+ZPGa3AiH+XJ8B25jClwI7w/IUH8z31XHZ9+Or6Iv1XeCAVmkPCl3Ea5oknIJphdLTgv+CEqAlp1z07ORAF2DXJx4fjZjaDUdgZkF8Pj/reHR+38oeBUxokAmu5TKyQTj+czvfkq2SG8ilkHANmuocZCqBbSztCvqF9ZhR5DvoDOjSYFMJDwPU6Hla5zVyYt/K61cBNCRxSVSRNvhf49gXe2ZgNyx0mIjhpT7SNY009/ICOShkIpvlbBd/KdBfAqZDHm+wluoSBqAsBCOYr0nXruJ0KmEjvDu3s+QEVQKLKM2a/SZcjVoF13wa/TcGpVODQeSPd1RDypcMpPMd195Qss1BzpeQpb8GNuHcV6evpOWX9QGlApOdsbowJkHEfCluzcYhcNrVu/wGJFTq2n6qs4XUbTwgxtlRQGIzeFQCRCwMeTC7hewg+49Xs2Mk1JQvup4pVI46hbqYvrOYF+MEovmSB3pLTKlFZOMJTz2od4Ah9NNFPhgr1Y4Z5jnopzYJz140C4c6UG3UE5XdSuw9ZQvboduWMPW8aJyEL6wmwFNydhpAO/BHYjBmCuduepwPb88SZcLT6JwG1Tqyk0T/Ux1I4Z3viJ+xjrCtu0OhDvnzMXEM1m/UvFFpx4FlQRzxFZPM6btr9NdmCWuDqaOOioo+JFj5lBHOlJ2xo8SeGS9N2uJdN2ZgROCf8KkLZ3q3I8A0DBJTVwo0Fw6Jrrn+D4eAjgfj/k30Z/yvxamLdN90NzatXYNh4za0jzwfaj9Zg5w3qWla/9FVu73Cl5sHMyBjZ8eFcMJ1l8ci1br1INNeBLS98EFonaYaxQs6xWJwfTgdXcAHB73heGCe/ZTBeHRfeEEFonJfqdhC7SoMCYJBnhMpjhVEEdDH7BgRejyEHecK5BiOMaiqpGXbpDpdd+XhDsv/UTdcO9eOiVIe3W82Voipp1imd6n89dBoNDeIwHnYZvpZJRH0AV4alL/gzvCfoXHghakJej/IQWevW5qlUO81tRdeldk0Ijc548FeAYUoFgw0D6W4eNMbeSztoGW9nTF2TVTgc/EBOfC0wqqyeEgqPWL3l8De5fdK/cOHMGkMm4Rd9+r5VM6zB4ZC4/zc9wFGRYytR/6DoQGIHScYtWPR5/hvPK8cG2BJ4s0PfUrbw83/lLuItoLNfPPmCTT0Tx2LTwg9qlWG23BwMXXv1o2amJHkun6HLvjnRH/8NZQXvzr/GF2fopHOGf3glzNy19LkdGmpWxpEbxIHvTumADVTuUNIL98DEvCltM4HECmKyUQgaac/NIQYLCHfUsUE+8VOn/v+jlH9AcLulhCLAsgzY14WupDtEApPguSvyeDysjXK5YSEb2lK4eQefOnFJWEAndnRZAvRJmVuZ5gleouWA7yZcvGJisdYrF2k2M1ta2uONLRTkID6Bh8uL/vRvl3CIQEmCRheXGzmaCLFouMizPcY5ldtlEtZuhY+BN3A/iKPrhTlBGN5Ggma6N/Xd22OdaX74SvXgeN6HwM7R2Vhi3ibaSu3c/NRTzQz8F4tMCVK/YXux2ERTXWpy3IWyQe9QVa006jBpYsDD7XECCeonB/tq6hekTuQJukxf1doZ9xEVG5d4UHcntzo6DOnGSgx9kqX0vXZWoc5qsU6S9bHYW4Cp5rdSX6ziImFBYUHWi5zbDg6rrz5kcqhKuuczFwCCdml4TPOPRtZtLjc8Q0Ct9YS91dZPokXFetz1oJdFAiL/abzuLzom35IxhktKaYYYovz8tEQtZzeMbKUD9+QTPkrzg2tA8ODN2WhzvLMghQreXCY0b6eqX4yi0pPhL874i+pLHEZU8Nusw2MMAJsZl0eFeQgVtS3LHVFEFwHn3Jr8DNYp5yfS5pKbDSKFWmYxcpOBnMeatrvLmL+8OcfVPPpWJNMglbbZnYJ2rWNGL4pr2nPAPhBGB/ZOtXaNviP1VtVYJP0SAdbCjGwtQNRa3SdjdYtWSl836Ck+k8fKTu2BNWcQf9IPPIsnbhsRVZSJC+C6DTbN8nN+L+/g8kUUBi0XFJbrCxJDqi7f+xru/BdA9yBGfrpc0rpeagfz+O09NqGK+yASzGOdt9UHfdI9fzwW8xLIMS4o2PseniG4sM0E2Ccoek/xSc750GjMqGkrfSB9T5OnxyOQWUXTQk9hRtoHwyII4I/eRtbwgVhIxvLypeB2caYUDciK1CHP/Tia7USuNt21K1EWw0qdo+QB52H38RFP32Gzz/qfUCG9gnppCSbZSmm6VA/Lal8wMSQu3OTimWFkwzCIEvjgC7UbtPRje/CDV7PjT6bQFiLneTLs2f7XJDKhpRR8Ch0jvQmkv7K4VT0VYPJcqlxnDRc7SGQrNRChrZ8q3oVw68/TQsOi9Tzyka8mwqiY68bfXv/RYL2coVNlP3+1cSk9pxhuwk5JDTG/Kzj2HvoepTSiOoTcT4aCIYJ64ZnttTm8Wfyte6rNghLrm6X3HFEk7yh1AsvwbwJB1lkENuBfGrS2WCixarzmCaBzYdN68Kg6558oQdsDNJ+M0HwF0eu87dysbNJBPUCxdaDDLePQr/+finwKFhFNXUZPg1uI1m0ufqQjJ0CBwwaA0vT3d/w7bJ/8kTmvBgRQ5NMMxp/hZQq4utwH43KKanpxMVkFBfmr0oa9d3FQQoV1kp6VvlbUMSg2yTmQHM6CnUXHokWozeI4lHkePPI82RdDTrETky9/rmaLJhFQEssaSzS/xuwZggSBulqnXEyzBZ1bsf/+QK9ImLpmnDfOnzHOlb/0CPykAMS3hl2PXRkY4uk9WLKLunetFZlkk8QABOhqF2fu+0PMXuteV53sjdJxFI9Uz18gd42hf87NgGeNyEmJiQBhu1jVxry9o2SxLNqrZvTMgGVxcD1lSgu4onbyC7pz5z00orz71QR5m5wl/tbw5YyBRuJdzvS8JWxQ4NxU7J5ZzIAmcUspnYXww8DTsaGLn8d4LMuackqluBY4zZenvcJ98mcTQm/B8AID+zBbpYTKnqOUkAjidgBsRAeljbUTdwPUhi9lSiCvJucC1g+mEIb7PuOCVfNcfe+1AmG9r8f7s2/+ZzDEqVizyolhm8BdRwPNZNQPv51zg2gTPdXW/2086fo38aABxKqaWuISD/sE5F/Pf5WpQNkUU6kf5mIjnogAAAA=');
