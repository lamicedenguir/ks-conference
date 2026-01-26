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
            $redirect = 'search.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '_Sparkle_Site_Search_Page_';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'search.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/png');
    header('Content-Length: 3127');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAEcAAABHCAYAAABVsFofAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAR6ADAAQAAAABAAAARwAAAADU4+LrAAALoUlEQVR4Ae1bCXAT1xle7Upa3ZbkU75kbBfHN2DAdW0cu7gEGBhMO+AcUGjTktLBAZLAdJo09TQhJW0IM6VQMG1oOnRCTYGShpC409A2IUA6IbQcQ4FCymHAGIxAvnRtv1/xamTZluRDsj3ozax397237//f9x/vf/+TGSZSIghEEIggEEEggsBoR4AbaQaF0w1yTsvkHDp8pnmkeRlV9MvKygwTctL2zSzP2TaqGBtpZgoKCrJUKtVRuYwT4qJ1vxxpfkYN/dTU1Cqe5y+DIYEujuO2jBrmRooRQRAkcXFx35PJZG0iMN3g/GqkeBoVdGtra3m9Xr+RZVm3tviA8+D6nOLi4nitVvtniUTSCxgCCZpUPyokGG4mYmJiJsG//MtbU3yfAc72cPMVDD02mE5D6dPR0VHT1dVVMJQxRurbkIMTFRW1A36GHPCYKyEH59q1a/+Ry+VvjzlkwHDIwSEnrFQqt0B7nGMNoJCDQ4CsXLnyYwR6H441cMLGL3zPgv6WcpVC8euwMTIAQkPSnMzMTB7xS/WyZctkgWjm5OS8I5VKz/j2w96KUSgCfu77Wa93BJjlSUlJ0b0aRqIiIyMjDvHLfop44VN2TZgwQR+ID7VavQp93IEgy0oEXi4V9DqlkGIyDlpzaEuCcdeADwcc/xGz2TwuEB8hbY+Pj88DI5+JE6U73g9jQ5nujzABqlDw1wkUjZoXovUqITlBJ2SlmwYFTlFRkQoC2uptrggo/2swGKb54yNkbbGxsbNgHk0EiO9FjGFjWeqPeGKC8edxRo1gitUKqYl6IWtcrDAx1zxgcJKTk5MgkPd9eaB3OH8LzH0JaZU/XoatjQhBIt8H4Y6+GBLr0H5Xp9M92h/hyQVZWZnmWOuX0mKEnMw4oSg3SSidnDkgcLAlKYIgTos0+7rDzFwajWZdXV2dtD9ehqV+wYIFckhiA/mXvhjxrSP7hx/4Qd+SEyRTCtLfKspLEqYWpAjlU8YJM8qygwYHjnc+BGD1pdnXO5kbzO5AYmJiCtoHXAKiioxd3MGDB7e1tbVVY7JBEXC5XFxXZ8dPY6P1aSUlJauPHDlC2tZdJEJCXNFm6/27C1gJwyl4KcPzcrGx3zsBDU14zmq1vgRw/gDNcZu2t8BAl4pAfzCQm1l8x2Jvl4X3K/0OPpgGeH4TUpnHvB1eN9GAGiRD+pMcbmZa3HvTphWZvOkLdXXsvKrCQ9VVuULN7AJhcfXU33i3+z5XVFQowEc9fJ0Vpv1E3xrp+9XQ3/3GOU6n8y4YqoWJrKRlmxwxJBWQKsBk5FKOkXIsIxGcj3TcvdU4c/okz85cUlfnMhoMm3UaBaNV84xa2b/mZGdnm44ePfoueJlpNBpntLa2/r5bWAH5GGoHvzO9evVqx7179z6BKv+is7NzPoK+AkiuClJcB7A+gnpbCAjfQoEdlmtGLgdAAAkhTZ6jw9q4cE7xbLFvfvLEA1q18oxOA3BUvFjd4w7NnXjx4sV/gAYP2mXNzc0f9+gQ4he/4HjTJmmdPXv2Nspf29vbXwBY5Vi2C7Ey1SgUim3wAacAlp1AUfIyxu1LCCAAJZWyjJQV4gVHx55ljz+8nMZ9ZuPGDoNBV48gkNGoe2oOmQ1iqXlNTU3vYcy/LV68uOL06dOXvfkJx3NvsQ+S6qxZs/iTJ09muVy2MhkrVMpl7FQVz6WqlDJGje2BEpdGJWd0WiWjj9K/lj5p/g/tnx/WWe23L3BSbv+a9W8vJdLkQBMSElbeuXPnVaxM+6A965Ewc1F9INbsdntwK4bXQDDVlmPHjl31qvI8Dhs4nhHpAZKvnl8ZZbltKZSzjod5qaRCwbOFWpXMSFoSBV+jUKr2RmlSlghMy0twTYnLX2yooST8zp07X7NYLCtowYGP68RotPEKDZ8YGDSaETetuHLlyl5fXxYyoqDrKWQmT393dhInOCfLWOaraiVbplFJC9Vq5WdaveF1Hj7p+R3HX79+7twO+Lc56O/5NhwPMF0HtPTFlpaWVwEQhQHuEhZwRGLinUxkx/on0+QqyTSVUlVws5WRrvxRfaXN1pUv9gn3nVZhxFG70tPTl584ceIu0Q8YBIaCyU2bnta0W9sT9E6JmWWlnMMla8Eu/RakRj4nFCQDjkl0YcpGLDYeTMLyKwtBaODOnbJk5WcnVBcXpK5tu9X8Cs/Zn4ErsUmk8l2uLsv4a62pT92zXh9nt9nCrj0wKwZmtWH16tXf2bNnz30RSQ9KYsVw3CEFSWFhYazFcqeIl7qmT8x7tgLOOCdKwytZxDVKmYrpsnFbH/rK4yvOHXlzC3RF9+mnB9oPHTq0BPu464itlmMMUXACaZRYUC+qlufeXSW+e7p6fydWdtc5YUYyhCNqhCD3sWKtvnHjxhto6zHGsIFDKw1Qz4FaliNIrHLYHVMUCi5ehwgYISGDLRRjs3OMw8k7BVbx/Lot7/7sZX5h4v22jkUuQdJAzFdWVjow0TXI02xFROxZuhFwuudGzNNyLU7CZrP1eKZOYhs9AwABMRg9egp4g3LazOfPn9+BSt5kMi29dOkSBZqePuLDoMHBJCRZWVmJCAqLsbGrqq+vL3c4HIhzXFKSJJFyuSQMAhT4kS/ISSScRSbXLN/8uw/eotX5xu3Kb3MSm8pml3hOJrond0FkcLjvAKMIMdSboHMzLS3tmwhsP++PRtDgEBgwFdXNmzfzsNxWQiLTId1JuIwERq8CSbC4CCTsvhmOk/1PodIt3vmnj9ynEKuWVutbWq88yWLlFNyhTK8RhrWC+Ec8swjC3AJN/COyBSsaGxv9Hjb6BSc3N1eOgMyMdMVU5ImrAEQprkxoR28d9JkKVh+otcS9dZDJ+H/qDTGL9r//yTmxW1NL06O2rk4z8guMEOIjLUp4YZuzDj5mFZbrF6A5G6A5nnhG5GlAd2z2kmGjx7tVndQj6EuBPDGlQ8enxe+bPn1qj1OBurqliq+VPfTvyi+nC+6rZHzQya4BTQCdKR8Fwb4Dx9sCzZk7kO/9as6FCxeuAqAFONJ9A/ub8mAH5hBQ8dh8KlXKTYVTyp/bvXu3zfvbDxuPz7G2tefbnU73kSsOQ/uwS+8vvniGJhvhPFfAKesoqkUtfUcaQBcludzCE+/YGrDwKY9BuJ3wNeWXL1/udTSE74ZWSktLtcjp/DYYDYKfwcmCwp6SFPcs2bkv5YaGBm5Cdsrfs9NjoVUx7is7wxTsT1BYxCPVmLQF4wbUYuIX/mV3fn6+wZePYX3HRFmcWj7vJbFezHFI3Gg1ytakpISF/RGfkJdZYU4yOBPjde4TiAScQiSbjMGC4x4WJw8FOHk4iZdePIh1WMYdcAk/hr/xhAT98TQs9aQJOJqpgeTuiEzQ3XNAF6W+mJGa2u/RDH1vSjDuMeAgDxlAQa2SC0hpCFFazYDAoclQGIEV8y/efIjPEOBtCLKmL82lb0NakIgqhoacVSlk7gnSqWVCXNSx3NyMTH+ESeJKhbwT6VOBzA8rPdkd/extwOAQnYqKCo2vuVPSDY53sj8+Qt6GVSA5NTG60ZxoEDLM8XsfKSkxBiIKSW9Fn16mMFhwiB6ZO8znJzAjJ/zLAToUCMRHWNrnzi1STcxNe6y2dlbfSWAvLrBamKHurTQf3wvgDPkHk3QEDM1UepEcO48Ivl72BUV8B2ij8qe2YfHk48ePj0F0+i0/oiRtGnUlLOAgHfAEth2Jfmb/YIJDPxNBdP0UHKcfbEZnU8g1B3mTryOVkR1g+qMSuZCDA18zLwiteTDBwRK7FvHHB/40Jwjw/H0+tttmzJihxlK+ndKWmEmvC/UP9j+jUSQbHR29FjENpS96APTAg0O6D4AkiJS/gR11izdAAGcTtUcKEMCOejL2Q6fw6NagCDg+aoH4x4TfGR6ghFQEHB9w6JXOupB32Y6N5+Y+miNV5Kjx422/eaAIShEEIghEEIggEEEggkAEgUEg8H+mlnYsNaEzygAAAABJRU5ErkJggg==');
