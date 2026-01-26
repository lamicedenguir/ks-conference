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
    header('Content-Length: 4466');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRmoRAABXRUJQVlA4IF4RAAAQSwCdASq+AKAAPjEWiUOiISESSPY0IAMEsbdur/wZAi3vnm72R+2/fHirSI9Q38v+z/kR86P2A9lXmAfp3/nv1a7Cf7ceoD9iv2190f/Pf7D/R+4j9e/wz+QD+O/13rMP2X9gj+a/1z/0et1+4Pwf/tx+2XwI/sj/3tZe6u9t/95/I39tPXfwn+HP1H9lf6x/3/dS/cum41HfkH2D+6/1X9mfzg+T/9P4E8AL8W/mP+C/Mfz4dm3q/+b9AL2A+o/7D7ffRh/xvR36zf3z3AP5N/Lv8r/Yv3C/tn//+nf8V/tPGg+zf3L/M/3f8mfsA/i/9O/1P9j/eD/JfS3/T/8H/H/uV/j/cB+e/3n/ef4f/L/9z/D/YL/KP6R/oP7t+6f+M////j+5H2F/tj7Hn6q/943KArPrNWM3A8rISd4w/QBH/B+uDXw4TcNbco9sx3ujKfeR9ygebt/uRZ6e2Y8YdENGmOtXnJdRy5s6zjhjvicLRBIwo1pkWnKWFlncgdsVQl0yC442pDX7FY19BAhyDS0a+pS9c7wWp56xjvpWCR9ldNatACJ5D6TOV2ReE/fvUyU1469pCgFpG5hNhGlKaS9HE9qVstS+0/O5ljt/hDFaTDH+Kr5nQsEP3WFq3KzDD43JOCNveUTFwfM60fziglhFVVLdL07h+cce2sEXbF+2cetGcc1eHWgTuxNZzhxckEgukDcVnv+IlBhsEmFdm7+p6V8S5kqQs3hx8jSw39d0Rpu9+si/qaMqSSA71VW0k4BOHHkVF4mZSW+t2mM9DVqACiuO8IqwO81dAb7hrAAA/v7dg8htHvvEP64t8RzYkstFPGQdzRXi2tfM6zUzcp4aduW+Ul9d++TlOKgSG//CGorYDC0srb8PYfe0pVVe9f862W3OOQ2R7W/SC/lEfIi1RrwAUw+egAtdZy9wdQeM1zyMha/Req/48VB0Qm9Yzi+1clZnOEKl982GW7ZCaEKhar8k+3DVn6Cglg/m4NKdecja8X8/Y5pPcbDvVKA7lVknG+8OQDsKKmPcMTog/hu8G5UZErcfwe56HAgj3/4vsYNZDSyI3j1EDg6sAisTS18JgPVJ8LpSiHsy/Nz/AIP4B1NVTCHMlCWTAkUi/ZCEsUvJyiWx/LrjMNz+uPlA0GObZcx9LpuVkl0mcsGtv+vEZJgYzGoUXB2SAz4hsN8hoUbZD1fNTL0zu4xLJTIt3TS8JVSmBQMBLJBEB7W0edgLX4T8rOVLqrFmfCKTyqRmaUqqEOTfTmJwUTwh39pjb2MQHu//g7AHrjPvkrHOnyVpojzHsgXuFRBEwxeEu1Zv5xRPktaWt2QkYr8Fv6zsV6QKoy5+2SnzkbP8YUJghAqs3SrLJU/+xKmaGb2t1vt5GRxKo2dp9frKwg0Vzl9GQqd8d6wqbtGy9Ike6f0P4MqCBMUkahYweGqL45ZaIOB+FCCrBgxCEqqMx9RZoyJzW4Q1803yWLm6gWIkruzzUIHLbwfg4usLNCb4Pd85ox0fCuM6ZpKrKRk8DP2///k1E8Mlfg1XpsyeAyOsqCy+fi9M4cYVZnBJhhLvIdmpqEeIQb7SKJMnYObJezKZMUh5VUz9oVNofHJb0uIat2OCAU0vnR3XjIkXM1ZL8LteGco/y3K+1xuRA0ViS6Psv+CutwvJa7v4d6jKq8gXl2kScyv0MG8trlyU9JoBlaOr5Y09nH2svQ0FKpjVFhCbvGA6LMCGEaNWr85CEj301BYecTIFiFJ8R/kfEeTy1IHqTxXcxZbtt56IBShPz/+tFN6FfTy3GC/KRGK04W8Zu7JiuATFheozGJIcXPQd/ykErNgsXifWN83dnV4Iv7RCU2qtVexr4r4HMLM3gQ/0Nae9qaXkkkZjx79wOo5p6XHvfYamNXh0OwgI6z32OTm51kfN4vqKnMdbAkivWdqzDXRkABEPdf2IQ/Dh3wzW1fIbDCECpANxVKfGafCrwT4UoEHtagYeXWVNomIrs9rHVQYQ7Caw63+jGwyRiVPeYONKdfO8S7DZLG7i1BXpuxOG5rMgaCZ88aqjwW6jk3AcfEHqS6ir8dUE77gZoubQTop3yuDpAFdzwJ18P2PkCn08FxgTN5Dg+wI0OJi39cWE6CEj4JP0b66t56KKFSdtWipQLbbg5yQvFuZlwMh2UDnTsFRdM+AeVsN58BaTynzKW/seUOxOPYhArv0h9YpExWOuiTEtUwx2I5B06QjQPebfhbZk4QUjni+n+fIu+cJsO3iLZowHtNVrAguUrzP0NSv/g8z2vO+ibE9uDFqN+iyeW8Z6BUNRTva3WJdnLae0on+ArOeFuxELv5NcLjD1gbuON5neVpKECDY2SszIC93I+9bIQCtRBvp0D0N523c6DV8y0/ySMfJqb4JkaStbI5H+fvKyoUKZz2PetK6zzsj2AHfZrfPm0+0GjhoDs1EqKSMjUmR4cgwOvpe41mfwUmAmj6o/pyOX7NqfEgWrp6v2rODJO9qYRhfeCwiVgWpy/KbVjA2u2TFsouUvLmEqzlsgCP5bEw0QvH9QdQHuf20AGqSzn+wqL0yYgd92LR/+aUuMIY1DBEtKRjdRiqFvr+4SJXR75rzwh4l0UGV5VDq0uOcQ5osJ31UYy7JQC+Al1+UgtTiKsp+S4cWkNomrSyxri6sYVmXGz4F5UWJ4m9DL8mYLbG3N29m9nOOkTJJD0oYPEtNKrlG+91H/8jKutPt6OyL0CyxZaPiGfxeENWVHe6DHSOpEgdwA42sWP+p9ZuvzP4G5JafeiRHcYQ8qD15JPXwShoGEYKn3tp0Uef20I1qj1Rt5fZ+ScXePPl55Clnkm2WPgUTvBFOOFq6zDMvWHIxZJYwBxd5qmagy+YrdUAPQcI87iTFx7xWDcAQht7pBzoF41/X0YxUwQty8onjwQMxW3uJaaNwoLke6I1g/HlPPmpGzX5Kpb+zkAm2XhfBD7pCMmtH7n5yaZ4aZz+MWlO8LS5Imse7XmeRhxfguo1ZXTM1RyPigFsLixF4VkU2kxUS+vn8oKA3PE3Lqvu5PUBDdbutvsQTjhcNV+OZ51YpvoUrpGg7Zclp/ZgNoiqL4vwDq7MX058VQ3zQjkl9gUATCxp8DsTT96TKTg1U2WoI+RVECmU7Bvlv213csK64AharzcoTn/lSU2azI1O4DuhXgLFkZsGhl0eiVPeyRDkNY09fBHrr/DWuzxS+xeDbsA7/wFFtI79rt6RQRUOACYCJiSDbVWowbIpivehkdjhfFlZcom2O1dWApYS18Bkk9Ur6qpXXRipnj5XxHyU2SxC/r7XslCNjIsQT53jSOtQj/gD6ofvTwNGLvFn3cDkY0RkFX2FuNIhUSJkm5G7k1vMrGhJb8M63DFiaTZ9krHSzwzdILh7LunBRgaQs39u6/YJ52p+khO1rNnzsI5R5w46GrbsbsVyATZYmR3v3vvky/uyrkEBtiqNGabQHmra3zUFxkT5ZewWR75MD+a3YtxSkrANln1vOnPrP/jt8tyvU7334SnA2q5Df7Jv5Okz7NCtc3YRzle/XZpWviC+X+SDNy1/jRSW4g1eXViASCKODtFnKVU/omjQc8a4fb73wui2eUg5HE9Ct81pgeZ1+3ew0HGSTlC+Qm3y/hdnVbxk4EyGEcMc5aZ0GsLUYP/7qUbhVAgT2/LFewzNW8PVAU9gaVwe//8nmSQuDCMdq4vDAr3pdCIMJoig7DAIuhJAANZmbGu39WOptPVVsXijfjszen8QRXD/y6+ykc9m5NfMkA67oD+MHhYrXFMiwFjswxxEEfuLak4w7AzpG+tORhWSVYcJozXysQd2rzuKEdGlyv+GCq1yMFnnGkv/IJpwvawfdSkhDisFzU3R7PHMW9YP7q+xRg53qtt5DD0Nx2nbiasdxHxLCiLBAtgCgnPKNfC1NK3ZaRk0DnZoGnkpOuEDhrr8V5QaN0RvoW0kbe2I/k0l5tHZ2dQIl1MpWzH20qJA92MfYxrE+exVeJA+4l6s7k52HNLKX9w1WggjlHW1Gfmxlw/ZLLx/ww1/9HM/wbr5RmqO7bxiQQhX+KqqS/fcpQqvZj4cN7yX1ykJQn8Mc5ZyefipM4zLPqmznLCpj2a8uHfDafmLuugS4vpYpmkoKXQODVbL/9OqE2funb6poMZ3iv/iP8frtuX0CNQjNiiu5WJqiRfTeUuAkyJMAEcSI/U9suTnManpg57ljxtAeQVRUlzOkX11TfAr4YZK6k0MO52R8GaOH9HEhxRzHWLFPYgMHS1PlWxp59xvwwBsWUQn5nJDI4axrYQUrorA7GxYjnHJvX+67IhRcYvD7OhkYh+QsWpsnPKvDjLnl6joRSGFHdCO/wyQGCaQmqu6U5RFoY5c261mL+EHDnNZjA/sJGfaMLy5V4pK3c8xX1b/3ybKE3D6dI9XGDgaTSCqREn8JtxC/0PwHkP4xX58qb+sglcx+ozt2s/qb+RKbS1gE2Xv8G40rwME0Vtnbjq3d3vIrJI8wILt+ihHamVWGU/xSMr3ZXlAZKEaFVmEKxxX3iRWh+p1tITzVcYMFZphhaAUaEW9cV1PfSOomIjvVWGSU7TjxxMWoaxD8pz8obqqgR0AwKjIZtuq7WU8urAimKEhiAVgUPKo5hiiXaS7w7OD8BaWIm6jSo5lLesDUEzw+P4xMl8vM5QBtuOUmc+xqWQSC70R8ZV4QpxAIdeDg1Niv07g43UKvbydN6eIPcjS5PdA1uMdpkW8JiqUi4qUFdJFlfMCSWqNu3QMmjwiqhbwFD1lI0xkUWFozkPk+bD2XcsTzKAtx18WHpfiPoDPbIYPBOE8e3OAEk/xtHn5xaxL2YVr/Splv4WTeNtE5PvBwHXuAp2T695Z3SyjKxzWmov2TZ4gFMXhyM/JSOyn6zdsXqb/beMLmDH9fpFuyF7xUNxHYY3I19e/j5JgG7vraJOB90f8ZMC8cWB4WNoXCDH/NxO1qAPA1j8s0NL/HZJT3jXqwtxfUIE2VixMHiK7ZNQC9wK8LD3bq/f70NikiJ4Ps1RqlJaacUmkMosBP4XsM07wDufBTJ+QCsaF0cs4IP0dM9heGMQel7VUrEmgaYhilo7I2TrF7+8Cmf5UQzJgkLpMrRSaFd1R/58Y0Q0v/TziRLvPoNpRpp+V3+4//r0bA2yL2W9UWSA1IjOE3e9AMKUHBXUvAqSuGxPfYRLGFasC41UEpJ3p7KSxgr6Zy1krumh4LGjP5u3agECzEMj8ROjFPI4GRFQJjWT0fO7ezwQpWZP9ayO1sn41cg5NxnYhYmHEBCkhdXhy7zxOcuezSKeEAwJxjFnQsMQHkwmY6d+z7Um2xhwf5t6oOVhStbPuFdQfJeiVzdmjKgh8w/nq+3WGYFKn54YiP9w/47lx6UKhpidW7CcrcAcdEgQD04LvgdlI/DmP+iCPrOU1LfP4UAePF5TgqUkV684MuByzzqC2V3yEVfAK6Dtp0MJS+5jBiUr+0bzn8jup9zm1M9VWjocISKpAfA2vHtOxK5rZfW1RvfMbbL1deN7XBWJYMkAqCGB4lUYh5CTWINiX6PEh4jxXb718omGdtOsB1l+3LGxIkiw9WxSpbAzafKRu2WA4cGNI97J9+rHqE3crrHobfzI+S5QK6mfusu/2hO4OYnipMLQ4l1uGWncomMG/EuApJ5hx3Gjv00xTOjnN5Qh7bxaYzWfB5eiVDmy4b1bPagyfgSLHXgR65wAyXa5HdC12gtSNdyTyIyNDljsRg4matJuxjjQFuXZdbdJTHg4SvWRiRUmBqCYrhqyddnP4Yr7Ni2IS+3wM6wI3/xkFEqHxCQf5Efpe5wjKpGLqR4S440ZABPvyMOd8O2W3le2zjcRvS8LplglLeoPBgUIO4t+IyHpBQ6EgK08+hbHucJ1ftlfBgrN3IXtuSVZG2AAAA=');
