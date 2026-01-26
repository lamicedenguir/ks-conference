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
    header('Content-Length: 4289');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMDAwMDAwMDAwMEBAQEBAYFBQUFBgkGBwYHBgkOCAoICAoIDgwPDAsMDwwWEQ8PERYZFRQVGR4bGx4mJCYyMkMBAwMDAwMDAwMDAwQEBAQEBgUFBQUGCQYHBgcGCQ4ICggICggODA8MCwwPDBYRDw8RFhkVFBUZHhsbHiYkJjIyQ//AABEIAF8AcQMBIgACEQEDEQH/xACgAAACAgMBAQEAAAAAAAAAAAAABwUGAQgJBAIDEAABAwMCAwUDBwsCBwAAAAABAgMEAAUGBxESITEIEyJBURQXMkJXYZKT0tQJFRYjUlNWYnGBoSSRJjM0N2N1tAEBAAEEAwAAAAAAAAAAAAAAAAQBAgMGBQcIEQACAgIBAwMDAwUAAAAAAAABAgADBBEFBiExEhNxIkFRFGGhBzJCYpH/2gAMAwEAAhEDEQA/AOqdFFYpECQNyTsB13pJ2Wy23Vi4XDNMiYE/HQVQcXhqcWhlcZtWz1yUlCgFqkrT+qUejSQR8Rqc1AlSb/MtumdpdU29fmlP3qSgkGDZWjwPkFJBS7KJ7lrbmN1K+TTOixo0GLHixGUMR47SGWGUDhShDY4UpAHQADYUiL33QabfwlC+u99+j3QabfwlC+u99+mJvRvSIu/dBpt/CUL67336PdBpt/CUL67336YtFIi690Gm38JQvrvffr69z+mwBUcShfR43uZ+vTDopESmSYfb9PERc9we1ORDZitV5t8dbjiblal/9QA2pRBfY271kjnukp+VTmhTYk2JFnQpLciNKZQ+w82riQ406kKQtBHUKB3Br9KVOKA4Nk8zTd5JTaZaX7vizh5pSypfFLt2/kY618bY/dKAHw0iNeiiikQooopEKisjvttxmy3K/wB3f7mDboy5DywCo8KeiUJTuVLUfClI5kkAc6lKU1xCs7zluyJ2Xj2GSWZlz6KRNvJSHY0Q7ggoipUHl/zlHoaRJfT+yXKJEuOUZG0UZFk76Js9tWxMJhI2jW5JHyIyDsduSnCpXnV2nT4dtiuzrlMYiRmhu4++4lttA9VKUQBSm1c1itGl9visCMu7ZHdD3dptDG6nH3FHhCl8O5De525DcnkK1BzcsoeZv3aSyybPuT6Q/CwSwuBHsqFjdPtRBCW/9+I+prGz+nehsjzs6A+TNs4PpPK5UU35DWUUXkiha6zdfkFfPs1gjYH3YkKPzNpr/wBpvRqwPLYVlQuTqeXDbWHJIJ+haQEf5pnYJm9m1DxiFldgRLRAluvNNiU2GnN2FltW6QTsNxy51zEXr9Jso9n0709xLFY6SAlYiCfKUkfvHX/iP9q9MTtVayxVoP53tTraVblo21lKSPMeDYisS5Cg92B+BN9y/wCk3JXYaLxnGvj3+sE2ZmajMy67qa6k0Dv/AGM6xUVpnpB2p5edZFbMQyDEFpuNwX3bEq0qK2QQCSt1t07oQkDcqBNblo8xvWdXVxtTsTq7m+C5Tp7M/Qctj+zcUDgBg4ZT29QK77dpmiiirpw8Kpud4y/ktnQm2SEQ75a5LdzskxQ3EedH34OP1acSS26nzQoirlRSJXsSypnL7Bb7y0yuI85xsToLn/NgzI6i2/Fd9FtrBSfXr0qw0qris4BnbN+Twox3M5TEK6gEJRDu5AZizDudgmSkBhz+cIPmaalImaKKKRKfnmVSMcsrabTHRKvt2lItljhr+F+c+CUlzps00kFx0+SEmoNblk0d03lzZ0p2RHssN6ZNlOnd+4TH1Fx15ZPV2Q6vf+/oK8eIf8aZNdNRJKibdBVKseNMkkANsuluZOUk9HH3Ud2n0bR/MaVPaifkXpjTXTSI8tv9LcnbRK4Ovs8cpBJHmAV8X9qtc+lSf+fJnL8Dx6cpy+FhWsVqdy9zDyKqlNjkfv6VM17eyudh9nka4ZUhuVqDnKnRi8Z5PeN2iAnw+1JSrpsDs2PTb1Na5WHHsu1Lyc2+0sSbxerk6t9911e5PEfG8+4r4UjfmT/QVc9echF91Nv0aOkNW6wFFjtzCT+raYgDu9kDyBVuadOOWO6YhgGCYPiKvZM41ZV7RNuAGzsC0jxAJIIKRweLl15+dQz9bekklV868k+P5npPHvHTvB4vJV0ULyvLoBULARXiY9aGwKdeK6UGyB5PzGDpp2VtMrhGmPX3LlZRPgSfZZzFsf7mJGfSApTKijxqIBHPcU3J/ZN0YmR1MtWOZBXtyejTnwsfaqWn/FeK+ZLpF2R9O2HZ5Uyh9zgZZZQly4XmWlPiWRuN9vlKJ4UDlVP0U7ZmO6yXq+WprCrrj1vstpduk+8zJTLkOIwz1VJX4O74vLrvsalLWgXRRfHftudDcp1n1Dk8jfkY/UPItWLD7Ter2e359Ff0j4jF0j7PNi0jvl+vUW7PXV+ahMeGuQ2lC4kf4loJTyUpauqthyAFP3pWjdx/KA6Tw7lMZtGN5be7NCeDcu9w4aUx0bnhCkpdUk8J+TxcJPpV61d7Q2IM9na+6n4Tkct5i7RXLXaJ9uQA/EuT6CEB5LhSW1NqHi3G467GrwoUaUaE13kuTz+Xy3zuSyXyMh1VWsfWyFGh4m1W9VzHM8w7L5F4iYtktrvD1mk+yz2oUhDyorvPk6Ek7b7HY9CQfSue/Yp7S83L3Lpp3qRkGQZBlFymSZ0CRJSl1hqFFiha2y5xJKSSlRAAP9auPY4c0AGZanDR79MVXKQ02/OOQIZQzGjd8oJZjFlSirxnqvc7Ac6rIE37orTG49vTQ21SMmgSUZK3OsjjzBZXCaHtTzLvclqOUuq577niVsAketebH+31oddsZvF8ubt2s0y2hB/ND7CXZUzvFbJ9lU2eBf8ANuU8I50ibiX6wW3JLJdbDeWA/b7lFcjPt8wSlwbbpI5pUnqlQ5gjcVUtPb/cH4tyxXJHlOZFjDyIk1xe286OsExLiNvkyEDdQHRwKT5UrtCu1Xp5r7cLlYbJHuNovMJgyTb7gEbvx0kJLrK2yQopJHEk7Eb0wtSoq8act+qVtSA5jjLjd7a6CZZXDxSN/VyMR3zX9FJ+VSIzufoKKr4y3Fdud4b3+hK/u0UiUiNxYJnbluPgxzN5bsmGTyTBvnDxvRx5BExCS6n/AMiVftCv2yjTCFlGfYPnUm7SWXcWU4piGhCFNPqd33LhVzG2/lVyy3FYeV49Psk5xbIkBC2JDXJ2LJZUHGJLJPwuMrSFpPqKh8EySZkFofZvTLcXILNKXbL3FRvwty2QD3je4G7L6CHWj+yoedCN9j+R/EkYuXkYVpuxrDW5qsqLDX9lqlGHf8g6nG/OkOIzPNUOJIcF/ue4PXf2hdb/ANkehp7QOlElZCIc3S5tFqJ+Eq4eLhR9OwJ5eVaudpnC3sR1UvMtLSkwMhP50ir28JU5yeQPpSvy9CKv+CXKdqZgGNwMcnoj6kaXvKmWRDivFc7fvuphO557DZJHTYAdDUJPpsdfvsEfvo+P5npTqP0cz0v05y1NgGI/H3Yl1gPaj9XUEDvrwFdQrfgGUzt/wnIWqmjmTZNbpU7DG47TEptsHhX3MvvZUcHcAOONEbdNxTx1WzvTHVbs9ar2HQG4WyVcoONQH5MC1Qlwn27aw+lxxko7tBUEtpUOAb7dPOm7Zs90m17xmThue2u3tTlENXHHL5s0+zJb3BXHK+FXEDvwqRssV9YToHoFofdZWb47Aascr2Z1hUyfdn1tNsPbcTQS+5wkHbzBNTAQRseNTzjl8bn4OS2HlYltdwOgpUn1fuuvIP2InL7RebaxpBfYcztSMYFCLktN0xVdibmuSm3hwhTe6gqT3qeWwHh6cq2F0qwTBYHZU7QTmN5XIzexuRJEuI9c7Cu2NxJ0SKoKXGTIW7xrG43WnbhIrcCT2bezdnEmJmY06sU0zgJjcmCpyPGlBw8YdU0wpLa+Lfc7jnTrawrFf0XcwtGO2xnGnIaoSrU0wlqKY6xspoNo2HCrfn61WQmVlZlYEMp0QexBH2M54/k7bFY5GnOc39+zwHLvEyF5iNcFx21SmWnISOJtDpHElJ35gHaqJ+Tj/wC5Wrv/AKln/wCo10/xDTvB9PrfOtWE4vbrFDnPd/Ijwm+7Q44UhHGsDz4Rt/SozD9J9ONPps+44ThtpsUue0GpT0Jnu1PICuMJWdzuN+dJScwexZaLZdO1Dq2u5W+NM9miXtTIkNJdDal3FCCpIUDsSCRv6EiozskY1YD2vdSLe5Z4bkSzfpILfHcaStuN3U0MIKEqBAKUEpH0GuqeMaTab4ZfLhkuK4babPd7gh1EydEZ4HXkvLDq0qVud+JQBP01ixaS6a4rkk/Lsawy02y+z+/9ruMdngfe9qX3rvGrfnxqG5+mkTl32cYEGz9uzUK2WyK1EhQrllrEeOyAhtppt5SUIQByCQBsBXSnKQc3yyDp4wvjtNrEe7ZStJ5LQVccO2k9P16k946P3adj8VR97w7S7TWXeNUrTgNuGWS33UNPxWeGbcp90c4EsBXPxPrXso9ANyeQq94HjT+M2PuLlJRMvM+Q5cb1NSNhKnydi4pO+x7tAAbaB+FCQKRLZwD9lP8Aiis0UiYNKjNR+hV+hanRvDbi03a8qQBukweI9xcNtwAqGtfjV+6UonoKbFfEqOxLjvxZLKHmH2lNOtLAUlaFjhUlQPUEHYikRRay6V23VnE12pxbbF0iFUi1TT0aeI24V7dW19Ff7iuWUbFs/wAV1CtuMwo0215a1cWmYfdqKVd4s7JcbWOSmiOZV0Kd966uYA9Ix2bctMLstRdsbKJFifcJJm2VZ4GgSSSp2Kf1LnnsEq+VV9kWi1yp8C6SrdFenQQ57LJW0lTrAdHCsNrI3TxDkdqxWUrYQd6IPmdgdJ9f53TWDm8XZjJnYV9dnt02HtXY41vuDtT/AJLFnftFsHzm3Ww59Zo92vceG01Ju7A9ikPuJACllTHDyJ6Dyqpxeyvo3HfQ/JstxnBtW6GpdxfdbA9CniG4rYsbVmryiE7Kg/Imr1dQ85j1+zj8tl01An0112sirv7KAew+JHWu122y2+LarRBjwYUVvu2I7CA222nrskCpAVmirpxDMzMzuxZmJJJ7kk/cwooopKQoopeahXq5Ns2zEMak9zkOUOuRYshPM2+I2AZVxUNxyYQdkerikikSJtQGeZy/kiyV4/h8qRbrMkjwS7qAWpc4ftJYBLDR8ld4fSmxsBUdZLLb8etNrsVpYDEC2xG4sdvfcpbaTwjc+ZPUnzPOpKkQooopEKKKKRKFqHZLhPi2/KMbaCskxiQqbbkAhJmNFO0m3rJ+RJQOH0CwlXlVlsF+tuT2a13+0Pd7CuMZD7SiClSeLqhxJ5pWggpWk80qBBqX2FJ2Q7eNMcjvD1uxqffMayB1dxai252I07bLks/6kcEt1hJZk7h0cJJS5xb9aRHFWaVHvfmfNdl/29n/AB1HvfmfNdl/29n/AB1IjXopUe9+Z812X/b2f8dR735nzXZf9vZ/x1IjXopUe9+Z812X/b2f8dWPe9M+a7L/ALez/jqRGncJcS3w5U+dIbjRYbDkiQ+4oJQy00krW4snolIG5NLfTyBMu79z1LvUZ6NcMhaQ1bYr42ct1naJVHaIPwOP7986OR4lBJ+GoCbcL1qvLtuPP4pdLFjbEhM6+ruT8JSpzcdQUzAaRDekHgdXzeUrbwJ4R8VOsdKRM0UUUiFFFFIn/9k=');
