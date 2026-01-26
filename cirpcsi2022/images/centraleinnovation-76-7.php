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
    header('Content-Length: 1160');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRoAEAABXRUJQVlA4IHQEAABwFwCdASpMAEAAPjEWiUMiISEU2q0kIAMEs4AYqT+s3v/9H/knOAof0btNxxfS9+19sr8n5XbY3eqaveLd8v0SzxQPAG7N9gD+Vf3r/lemb/UfeB7X/lf/SfbT9gf8o/nP+Z/tv7t/4n//+HH9vPYW/UhfG7u7SZExNR7oQfHD9sExaxxkZ7VNnqyX8gQ3jzlltUY8kNWjCGDo9FSczG4SRvbI8utqI0VUQ/j11NTtNVa0NTbKg+I3DJyRluu9PlOp+MAAAP7/0oVk5SwIWykL2e4r86zYb1Gn5vFqfA8YoUNIECtBdGs/NAooPf/Q973M3+f7Yv7IhdB9499yU7KaEvacOE6b8hd/5N8+hKpMxd391v3Nmj9IC+iq2vHb8B/g4kimtP+a/EHkJp5hY4VXveOiPX7u1oRi7DA+9CJDGF0IA4HFD0v9hpYAxcs8m1PLAwTZxUBQDboUKKDi2f3KmYcOyspW3cQv4TXxFcnNjbQDbD0OKQJZv28UuFp1IzK9M0ZcZI9Gd3LK99M6MgHKJeqplNMPLayfU2lxGx1SHjQaVTBRoF1/qq3YqQ5rh8oH8Bn6tp6O2X5GtpbeALuV8EI5j4lAiNcgOi9ja9Nz/iTEJWUfv/dP9SNIQFg5XSyxw/c0et3jCMV9muqL1Wlh5MZQtNlw64oURBs6KCxtDN7ym57Gml9iqD8B6Ra7TtQltF9ixips+VuOOUeXPfOo/Jg61V84S7/rg9JASVePVLjNbeFhXtpRqBu2z+D4FFRiKQEJNlaLN57/odjdK+/onZvH+x+cNirwgkoCFBkf5eoCJIzKJMOONbY9cCbEfz/TZTjrUTnr5Kq8EJbYB4Su4IcX2hXFXELv6n+RwYCx7QEStrogk36Km2fBQlJoTZurmUf/V1Xf1A/Kv/hyL/tliPzUPSKlS96zLtXIu/6GDtbieJr0q+uxXkQAj5TKhZUkOI2EpyMksJ2Y0Tv+vw/Qp/5M6eHnopbE/t5QFLpuw9JNApG3lEhlAwqD6sDcola6Tl6WXS8/XFsKqRxpTsrRIB0FXzmBTz2RgNNxuLEsCPPYwabDpa/L3iOOhR/gu788eOrne13uQSWG4fSzFfcq32s4kxeKJX0ABFDQ1ShYUy5egIDtEyuz5LBIAE6RuO+BX8+uXOhUgBD7Cf8ScWT9MpKmTT+YoTE4CXD0CgCDC8VmZC0ygI4/CmMg3sBnxT8nv6WW/Ql5P00XTAXi1YOOJN229MuVchAzGKwYRQ0R5jAUzbyb9PJsKiHjs6sAiSvt4fhCZHU2mWWucAt0nn2H+qrWVl6yhg/SQuxTFozjLOlgPfjsc2ix6tH4+uHxUBNYruerISQtSa1rlGVjR5bjZKeIMpgDX2gObQk53W/YoZeg8yTXLgisiVsZSEQ0rivV2t1d+UTJCNSSSX91R8TIYprtSFZRFcwJLmt4wPdrwEBZ/sIn4kC7A82ab/6m02+R9hIOjeJTUVDDwjcAvmYXb69DpKhIyunpbTD1Rb3YfrIAAAA=');
