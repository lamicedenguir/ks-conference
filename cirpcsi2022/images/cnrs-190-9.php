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
    header('Content-Length: 4166');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRj4QAABXRUJQVlA4IDIQAAAQRgCdASq+AKAAPlEgjUQjoiEXeXYMOAUEsoBrMlXWJ7SfXeddzD3k+gsm/YRG57VdAfoy/QHsAeNz6y/M/5r2nkSFB966dfz57X7uVqQfHPtD+N/sH7mfHr4M/Qf5EagX43/PP9TvhoAP0D++f8zw4tS/IC/l/9Z/2vrx/oPDK+5f5/9dPgF/kn9b/8P96/Iz4/f8r/LfmH7g/zz/Ef8//Lfk79g/8s/sP+9/wP73f4T5xfYp+3vsXfr7/9k+ZoL3ac2oRa3E1fMg1vhi7H3WcFTwaLyKqKaZmypDN+vdH75KtXDaedU0/AwYzmvhmIkZsLLbc7cxWRkyVQbjh0BWnZWx0F6X8hKPlKajKfSiXVyMASl1cKIwQR48VMH2PQ3P2exga7Ak4oViVyLybeandB8JZ65ibe+oF+PZyUo20rETdzTb6QpoFPZaY6f/VOCqSANFQsrTwWlT1Q5BM3sPvHUk/+ah+zwZXXX8Rct4PQZwssu1Y7TS2frFprKzQrINY9PDu43gmEohZFVln4lWDuhNv5LK0aq+XmspDWjk51VYl7d8EzA5ly55qWVWTazeeRpMbtYuCOot4n8bEvhoy3g42gJRY+ZUVrtMdZtIMjR3zkjphHI2+EagWzFbSFQF12ux+Fe4Obh9nb2s9CVnFA+DpwTTYyIKxeruClUcfXY63mJgOkjhwRd3zS28a3UKZaOCJ1ie32Y1qB0w+fTeT8jscVnmqmPbA/4IMJcgiZzhenF22D/eIAD+/hSu1nkZ7rQw07Uy+m5gBc4nf/5HyOvE/yTnsuydJMEA2t8LsOu/az30LMQpNhoyz6BoSuhOLig1twIONzp2P8PMkI6jStO4rRFiWtACYibTlo8Lx25GRe1xD0X5czf9tL8yLLvxT8QcbiBIvy2lVtwD4fVjIz/NX1P6KfEQYzCplvAlB+AzBlfC1ez46eAit6zYgV7mdkbAOWhv+Vn85ETgWT/GChFuovpki5m7HKOHjmEFLASjl5lAMVmTInxW+txGiUbcqBfDh7+xEM/TAx4DVqzbLzT08rZy6e8u8oL/3qLdWurMcqapxK0tA7TU7Iz5Xp9mfbLfj9hT/LXolv9t12H9OZvJXJ++bb+N2GsqS9dJdUqzRETbDcQ/gWHCiBd70WCQ0873Lio2xY6bYVYz7pSqpVM5vzUbgXdyskhXuper3w20lFqslt9QzhIUBaYsh0PiMEDLi/p8C/WSMOieQCg36wCCvziDFPEythoGcNRAbriLdzqckwrXFxU3N5bApN/uIreUHge8FT1jR2ysTrxbfayrjHFpBRnlBmtt0jiJrGGzfDvxfmqq7fmCXsJZTrOYrxZl1e5D/x1Ume8q+5ENB3I6ouLmPdWt4hM7LLzf7dOvHlX98Gn97MtL2K285D89UYCHdoIQL8IW3yKbHcuxQWMstuyrtYFBneubpaArXmSuGK+Fd19GllAwZ70pcAydqMCoU6bi9TVCY5uGmDvFZ0AXPV+iDy236fPlxv4MmttTVx2dFWwVTMMjjz3V5ZUjVEc5QBrY4BdCevy12vwMcJ1mJwOnF6ylLvNVXgm9gdiwJbTjKjpACp3a6pu8luo03YWmHfbnTytkmIroYRmZBFtIlHwgHuV0mIlrz4VryIqxIqjONak1viKn/7/Blul2/BWgXAIogXCsjYgfDMZRd8Gv8NkwQnBDgH/Gf2ptd3F3dVwBQNuYUBMo9C2ZAbLAJapr8oUmwY6PBzTaZk6qtwhhxs2G+xFFlDUEvrm7wijZIz5SHPTPl+M5TijaejhWiiUQ7h0rfNBDj6RdV+FIYidMedg9Hc44PTNjKMUv9D89v3tz9nKtCQefpyBWJbUK6PUJhCSKB90ZdS4M+DUbnsFTAnjd+aiAoUHfwKoWzFdfkDvxPz0ZC8jCI2bUQfxZkcqoowu9zZqX0fYHYgpyZ0scTX1sish3EkWYaAfFV5ypbsKKx0RHQFIB6xee7CeoDAN5Q88gb13zY0wkqLjDjEG7NGwECYxRCYfQDzraoCpl6TqXQd0X66+uF6K2vRktx9TBYWQUYz+P7naJJLLtDx1kkaXhC0sl6FbWO6pYJqc+BdJqpJ8CZ5VbS5p6Nct0Vkc7RKxPZuu4Ivz+24fmyq1isbtqGrG0DVX3+tTILRz4L9suckv8tN96O5Zh+0rdBWPNj6IPB7VyAGfL+pfBqOOYT3Vv6xqdWI6MgNO8trAAv6sdlOiZonGcJ+6qTVFeyeRCmZzyvck93LqEob+QsxeG1RA1OV7zE5tlg1WwdGGN3CsTLjcEq5uNMk8SaRePOC9rg3dB2AiQBL6hE1Xtvzcesn+O5kLx45ZI5z/XiTkT+5bI/g8MbJK8uNaJzMJfzy0fJWvBMW7USsQYzM5a8HXbxj7QonOadEKhm4T/Ybsb0jGj4GnAqVuSlcDw9NeAN6ga+v0D6pDsShR407OlWRygleJLtETQRy6lB3WJI9c8l+6TGuIl8dsTY4UXRCSZAoyU05k0tlykaH5lky2SFvtz6qvXAkYm6n7VJhrmCCi/Vh0s7Y2QTrGuWJ2ukKSDDOxvtDAqLp0ei/c0O+sdY9BDSRk/78QuDpKl2sIHoEoVX2FrmMAxyAYTuLr4i0obItfkmKINGCefJ9nvYNzvGzD3sCBhIMiV+DYZ8HT/4gg23gjYul7pZhjj82oy3sbwoh/nMYjsfsjcF38J5cSaC8I9ZSejMCkPtZglR/v3Oxp6vJKBCmUEzCPuDwxNh5uQ5n7qAAQ3ooHj/vJ9j7NoXWjZLnDNAqBnu9fowyDx+BApfkGZEqrGd8PWEzr5ohyCRQWlA3X/Wfo8LypPVmtmWrXzqf1BSPIXqdCZ/KsD3zp7vmFgIMR+CNkUvlaJlRJpYbC/jvn5bkXzvmVzsJR42AH7wDhK4VtzT5U+yteL6vfoUSDTQWhLkj2MO769r8IwLQd3ISO5cFEyWklJ5g3TDrQ7tp9v2kAhWXsqnE8oeJuLwHrU6VI/OUdGaKsnzZEoD+m3NCMug0BafGeIBFhIFH41RcGm61xsSonn+Ijtbcv5XfvlYjIIwmyv5TLGfCQqfPzcF+iKUuhY97S3EOcpHZuvVRnyNcAslZz3Jh6tlvxJF+JSEAKvr0iDkVjtKtbU8qq5/ZvT7obwY1A2mpWGsxxJT3PeTgCEi5coCM7aV5nL3CDo/8QSuA2HDsoVgir/r4eSZpgmW+xlmJT8EZw+R4AhrD3DK5eBrKzHz2esLySNk6E9I6QGhrZexdiFoo5l4MyUzd9xIVjn/Rt/5F0tGPJeqa8YKVzVmeBlim9kt3YahwUeCR8QPrsGaKdWvskszhaj/sgAvlmmzr+kqr/n9oDsvGS3DiuhAV3nqDfH26l3y+jz4gwp5FmBsA9KB/IMxZW3Qhr/c/hU2IZmdWv+yRV7a2FV2Q1EBN4Ch1z0Ax7Z16M/+EhxDVZboI1hQJOjAzfxsKTbznEt1lU7s+LuEMru5yaHs4/QvAElWTyvc2vvtwn/3b/08NT9LTZAfRQ6Jy8cH0maDnJwMei6uCOtGgO2rJZRIFHm9yIm6XETBBASVNJMZH68GwDaJQ3Wa1/Xao8VKb5ZN4dTMdwETsUQXe25NJbmZUUy1ljrJSGgI2z9OKgF64LqlWr6RoHsx34UYyTkHRlzwhNy7Gpa592ynT9fc5f0s3ws3GReC1c3n7XjQpPFIjDeJsuQOX8KBIFNmwwpm0BfRiS6dt2lcMI4sXIN2NRY2S233UIatAeR3OYNYPpOlBJ8ydTqNEK64PypYwIPl/L+wkCjnXznrUEU/vWT03kSX2acCNp7a5y6gaBPP3lGZcXI/DVnSolhCHm1L0KBkfxEZ5w3N8A3VgumNoo6V9wunZS8Gp44vX63Z5S2fmQQp2+opKUb9ciVwwFR+kutL0oQ2SlrTjQPyYVyP9oMLKsFH4zqvCzktLOHZfiH/1rd859iqfJGDBW0B/Si+s91wIgGbWpB/oiFJ8eNxxJfmvMWL+hPL9zNlVYUNUHpjUmqSBoHMjGnhLGEvndWehB1ynKmoEJ0PmS6O1tPf+2XM1wi5ph/4+y34liEgrnpxxj486b/ZM7oUbJEJHCmxcLgRAhrfTWqD5mkon8zn6M4iKH4nVHuByKDsr1xi6/Xb18DztG0+jVgldBu0EoaZSQSWtU+r+9fKTVZUi09LFbU/eb8iSA47i2evrvJscBuebN9g1o5jjbOqamRc8MYRCH8UpD/ZBJhjHJgZOTpiFN/Iubw0r+d7HNHYGFGGkbihQLyNk+oYQeNwhX3mjwo3cxbA+FJD/lW9rF3FsC0NsCGsJbitj4fN03jMNzijvmlWKwT3vau80uaa9zrQltHdyaP4cgtUCINls8g/MT2wqa8boJClnwoXSX6Ojbj8+KIYty/ex3HG33yrQknv+TIQuO8nGFIPqnfv6cpd4Df/l0fki0qjc+3WuO21Hy5Gn3eNgConIBQQMADRkeT5dA00BUWGwr87EsPOQQXlMYgRAsBP2drhRP4IPsDF6/jL22vWBMXSfXRRv4XrLGN/hgqAWMdh0PlpYLXOGRyfOWvaymxDc+KKOLVcuul9MHL6E2vbY30zpr2f/TQIMDWvsjTyJnq031csCDQnSDWMHbobM9FylRzM/YfLOxafgrY40jzr4duCmjXldJj17vEF10AO5EpWDe2whxyRg5BNQa9vat8zi5ewlmRihehg5oH3xxgsAaspVCzMv5hpY1UB3uL1J0BugXVlGF6yob3zOMQm2VL05VWE+0dtqjgJkBC8YaawfyOwL6F2s4v6awO9oZfW7lIOHunZ4umyEa9/+2S5lAgY88iS0/oQGGkpLotkWScDpBm/dVspk/hCuTPKKv2i1ogTF4PECAGaC/IVbdDJo3H0EM+/9DfRSfyRGQqlQCKRt/nXmeHi8rZagVH9MuxKTWm8+GIz/wWBGtMN5JIqm8eb++nFv6CDiiHqOZoM4cupFsZF4JY2lLPWCyxzgQT2FJK+oWPKqXAD97XkpjuGsAqmeX/x8ROFf+1VLi+z5eraWr+HsmiNZA6QqK/b8bdz1EEpD/o+twMHsafo2XQe3ekvyng+39Nh6Eo6E6+Y+OjWC3M60b9pmBxEzR2UXsvD7ef4ppWmkv9riT89kkiMjHJB5/FE3qMTqiu8j70UxVhU90Dze6+n97PUb8118r2nuxGDni25c91XByNE2jMsr7U279TwKO7Tv2mHeIqLP++yTC7itzv7DkTEY5VCIkQ12l7Sfa47CsTT4QuGevfq9C6m4IBj+j3Gpo/pWhFARJDq5sgpGwGwbZ+QwmwuCagz8da/v24J9gVKFfF+jF1vrnhIBswRivzw5wDJRGgao+92P/VIdwRX7gh922FdUXeX5z9tuBbaN66ueiUNB+L/jxIK/fKX97u3N1g7kt0dI2t+3/9zjA5+1O0/MxYAAABF/tP9DoukG7DMBtu7ZjVTaiF1N8dwPktvVAk+sRj9i35Fqoh7biN1h8PIUO47O1lnfeNT2NdcMJQNEZWoVdgAAA=');
