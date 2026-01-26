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
    header('Content-Length: 1842');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRioHAABXRUJQVlA4IB4HAAAQJwCdASp3AGQAPjEWiUKiISEVus3gIAMEtIAUn/knuQy9L+z3/BfkL2Cfl72O/FD2bulD/SfIz9aPu39V/cH8nedPgBfiX8z/v/5VcEdoXmBeqf0T/R/kz/RP2Z6QPqb/qvxJ+C38x/yX5g84h4b7AH8z/q3/U/wf7M/Kj+7/6T+4/j57QfyH+1/67/Dfun/iPsD/jn85/yX9r/dv/C////0fcz6xv2Y9gv9SEIcAhLWTRceGXzngmsRN+syJ1jNk/xprnSWubPUx3t4vVwf2AZPwj1oOVln/FOzxPXqsNHi5IGQ8Ehs4yAZfam7T/fCyxg82mn/SZIRKXk8rIKSAmuSCib0s0hiRXM9MfH4RsL3yHLyzstB+JKIocwlyJtN6MU/dzKQ3BnuWctE5Ji/udfchmC1/ZFcL16I0lMVebCAA/v7dmFPjs+7KlmGa36eUI2voN1PljpMYQ33qCWzxluf36l25aFk75yRBUnGhVMfv8wA0GiTytsUdfgUUkj5SB3m2CrxwJ5gdvUsEP17tEouh4Cw4VaOhSfs93tidRFVmL0OTAbGKd3tCTBfDOwlXGMCkypsM9a4RCYpmSseEM9PmtVmuJa18vUycJx/3kPkDi8PjPlQhYrR44e5Y8OUZO0aJoF55foM5kxJdJvt21GBqQQ5UL/Rjqc4zTKp5oSHcx955PC3tykYVY26inH+AJr2E/6Y6G+kqDhFceCLgwkeogLxABrpkHwazNzqbwte/ndIwjfwsSceIeNtJvivyI0zPtlaxyaVEgmEcqQWtjmnKzqzV063rCQbwUehaM5l1efUJKoHYeakSxJ76Xmsj/72kczavGS6jY+vvp2TeoAq9+N4A9Syn3OulClqbKX67ijjlrVNmJamF48J0M3YRkfde9ALjN7smni9v04Xqa706qUaPuAvPD0iiY7Ut67kYBxgSJbgC2jELC3LPVYeR8axgQrqjWxpqD4XzydM64uEfeFvlAwdScHGQZ+e9KM/dEsDYkaL77FDeYQG4JTHG8sEVmvq58jPw5Ugy6+G1/0iH/88vRCIpjrRKDMMK0YrL1h9KjcUzjaJI/TRowtiJo7V/Uuu5+QmjgAJ/EcnDtz9kpOKUkuiHgMCklDy13/SuHUBGyJ0SFVrC9YZZXUIDxuz/yHlwzVXTcnSQo6hTgWIsCSJQ5Z9wQ1k0h78dHSxh8lKI5iGjfGLZ3uMaRZL8t9iiD0unWIu8nAFhTUQlcJRLxoWnalhzBNGmIkO49OPth9BenGRAOp428cn7x9YiavJwMg2KwNb8jWeu1UdWHsWGDHxJKJG9gg6KzC2ri/DsqZTnF3i3tFrqbixsrxMSF5/5UbWMSTM/MoDwL7QYHZvxrM300FdEwqQvGi3WyTzFndl/0KgHxhg3QrMFWvAIH0fEO7/YfcJedTvTuTC39h+01Pw54XtqNIJ1pcr0R4QZ9kjqMb12z6Sk4z90g7jnRYiFRO8hGEEZqPAocbjTBMm3RkfuOSsYt1bnObsVaSIoWWoROy8pCNo/ePGzThdtLUtfzrBpTk0J7wFl/jf90OGe0C/jPPkIUYHQTVkQVsYy9eThsDR9Wj/8y7xxjbkRXQM/d3E3xpLlEMCbv2hB16J2iKLblF1L61I55eAXQg6Ofdlll4i8IUt+iA4Hp3RlBxo7+QdrRD8TLedyRtz4kqRNUwYbtKPePepdnYtX8nfxop4yFKqBOpcmkC8asRmIniDT9Z8BE89OVxhOjRftnaghXF2v35St1Tf5j56uoHRew/PKWdYjI6Yqffg9gPeOJu1GATfw39oo50li4xEiuBmeoA0BjOi3xnAyRa7ell+frr//Hgd+6E4YFyP/KK6753rKxLG0MfkTfxA6ALED4bkkZq9XJrX2yUv2P67Np/rFl6dfbgC2X81xchcXtSGxmP/OYzIKiwPUjIR18kPtRFDrivDKWQoQyBd0m+tKSKoSMD0DrlpVYkqKJrE4PC2CkJKhACmHwc0qymximtJm4DHLQfTwmPhoxOFd5p4foQ2HoxAVVZeLLhbCHWJxDJrFfBZALX0DZtep6zkPxOc9XFC0gDqSNyenV1T3VVAoLojnaMMF1iJmO5MpowS3hauv1qtcWHMGFW/UOxdR8l0WoaLM+WhPwMwKjJQps514VWxw/EKxp4PT556f/Vjm0m9x/rah3uNE+diwFD7ONQ6pdfZaCF3un01HWT3TJXu7JIf+kkKMb+4J1Ea9iCQZbiKA7TJS7LLpcKBNHozra1nRCjwDG0U8P2M7UXDoUBt6NYBm5Q8GTcu3lf9VNDmp//75FYR8ppcWjHmgxVoILxEUlskAKFJEUV0DFU2yIjNu4lpRYvsPKvtYuMKIJANKL+jeSyCoNyU5k1rGDSeqww5zAI3kyku1AAxphzqnev0f35Bag7xqYWpnIC5hAAAA');
