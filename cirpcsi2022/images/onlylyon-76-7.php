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
    header('Content-Length: 1340');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRjQFAABXRUJQVlA4ICgFAAAQHQCdASpMAEAAPjEWiUMiISEU3VSQIAMEsYAY4DbgOsA9ADyy/Yp/dD0ls0v/nPZf/h/xL647yH6xboD/AdvL69+VXqf/VfxV8wdqb+8b4vUbxEfk3+p/JzggPUR/Ff8T+VXqZ+El3N7AH5c/0f5O/2D4Rv5X8yf+N7OPkn++f3v94f8d9gf8h/oH+D/sf7pf3v///Sb60P1z9hn9RVlnNlJLVB1JsZI84ndGXouzg6eAzd39nGz5P2zb6GXYAMaS096aCYX7PeF+KTz+E7XvN5W+f6thXOwadUPSCVZt4LZlk7BpTowei+c16OojI/UAAP7/pQrEZWzOHXEgAGVc98Nggd27e0feXHhjvfS+oUafTZFZ+n/zT1CbvsMkLa8iOTYqpDPqrVjtmAuGxg/+Te9qPWzpm/aZJISxNxU2ztft9gFkJbJuNeRbz4k3OQ6ACkaNJC8TdoHM51ohAU9GYw2zd8JN3AcGjYc1xNgiQCxVUOFAEuiks8pNqGQJDjeZmtTYzc/BpFE1NAxbQqHVeCSR0h03eMppya8k7TyDbAm68NNoLRNiQPIr+eae4fihxl04Z3s95pudcrr7zVvAxKKWksviiQdkHht9Kk49d7RzW9qPfiGflAlXA0r/1HMWcOwL54hc/LoC9fHRcTEdu68jn6NnWM9zunt2f9wbtbaSe8b2WYmgTsN+RcE2ECND/VVC8VjyDpCT4NePgb3jVuA8d703y/1pw9PSQSWlush2IkK0UPzRYoLd/QRK69U0EtWE5RbIXmNk1H9EtLVagEptDdhQ/tqjEfl1/gIRucNzzv8d0OM9gMRAR0Xkm+XPux80Chu4PXGQOy6aFi/Fo7mlXZP9J19tp/ph8nizp//yz/lz5+61RVzdVJr//badr/pypz7xARJjcMIsXenFJ3btzFUlfpcNpubEH7D/8ZQGK9dwQ4QM/JRO/Ej752/1gUEk32gXn9dsNpavIOCJ60RuSwIu/Uu74LN18f9y3k37N/3rJ/nzMAnzra0b2z28gbqWozksOjcwzRO4fPVSF8JP8f7bC+sb+V2OqjwWDuz56HVE6J0/+KhQg6isrTotXVHKkLWz3HUuJ/raRzlQZi8YPU0Hw+b4y9udeArytgVBUdyKNCDCxOyHDuvhVGUMYtozCG1vJ765HoK9ei3fQpmqaPxJxhccDyGmgQME/XJos87ujjW2PCjCBDuhm3/+BILRtX1b5zcmiRFDvPGx74PBM3Rf/QGzP9aaHUZzOfvMfQYf0NVmuu4+o3Ai2Omc6jHdvu+LQX99lxd5pa6+CF8J402jTjc7wMsfQii4ShnF+j9nG1tMxMf9xlI/qkMG9/hR9zWJ9pgj2p12Ofv91VY/6JVFN0kJnSFeMAqTZYcOUKF2CPEFjkSD2tDaHHSi8OoXKv6WSXfMP2uZBHdj/id+Ne7vOsOZU5Jn71/8MGvw53fiQ3BorRCkdvylKaL3QyXy1w/cCZaVgNq7QcQwlI9502fnzzDkqaIKqXyARFKIhAPxSXC+rymMY7HJQFzG4YaxCfkDIBl8LTkXe9ySJ8WdxV6dOnm22q66DOXbUGGyY1VzArIO74lzxP4nvS2+dHOL2vgHfqj725xI2diVUSZQC62dG075bgkeJhBujh+3872UWwQXsHfBB7gPQelw3xKvt26p+EdSLOARJYT4dbqIUyex+kZj00GtbMu5xbqSfziiSAE5Okv08uYGWFK5jwmZVZzDXRGTAXw4GTk862eOoAAAAAA=');
