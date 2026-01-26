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
    header('Content-Length: 1459');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMDAwMDAwMDAwMEBAQEBAYFBQUFBgkGBwYHBgkOCAoICAoIDgwPDAsMDwwWEQ8PERYZFRQVGR4bGx4mJCYyMkMBAwMDAwMDAwMDAwQEBAQEBgUFBQUGCQYHBgcGCQ4ICggICggODA8MCwwPDBYRDw8RFhkVFBUZHhsbHiYkJjIyQ//AABEIABkARAMBIgACEQEDEQH/xACIAAACAwEBAQAAAAAAAAAAAAAACAMFBwYJAhAAAQMDAwMCBAQHAAAAAAAAAQIDBAUGEQAHEhMhMQgUFSJBURYyUmEjN0J2gbTUAQACAwEBAAAAAAAAAAAAAAABAwIEBQAGEQACAQQBAwMEAwAAAAAAAAABAgMABBESBRMhMRRRYRUyQXEGIsH/2gAMAwEAAhEDEQA/APTu4LiaojBbjtplVFwD20EKw47k4zgZ7DyTrjxe1c9w7ISzQ3mFsgMwmqkwqR1T2GSDhWT/AEjvqC4YHxC6qoZ77UJyLRlP099lXzkIPz9XP3zgj7HSI0uBFiUHbm4EVBhiqVe5Y8FFOejdZSWIz0dtbh6Yy0tCo5IKyCUJH76VJIY9cDOfnFbXEcUnJLcF5mj6ZRV1XbJYM3fuMABfNelFJuml1KlvVJyQ3HMRguzmlq+aJwBKg5kDGMHScK9RW8G4dVqjGx+3bM2jwHyyajOSVlw/RSiVtIRyHcIyTjzrU9wYEmm2lvDFojgkj8IPrlSFqCpCpC2lKPHHkKSST9jqH0g/DxslRfZFHU+IT/d4xnrdU/m/fjj/ABoOWaRYwxUakkjzVzi47O04e95ieyivJUuo7aKObPTTZSxdgpGfGBVTYdz+qmbd9Ci3xZlGhW87IIqEhhLYcbb4kgpw+s5zj6HVLfW/u5tR3HrW22zNnxKrKoYInSZQK/nRgLIHNtKUJKuOSck+NN/pQLx2S3at3c2u7mbLXBTI7twAmfCn4ThS8FYwpK0rQVJ5DwQdB1dVAVnb+3f3x8Va4y84q/vp5b2x4y1dbQrbRsHS2aXbOZMEnxn4qrN4+tTBxt/b/j9DX/RrYN89yLu2z2mhXdTWYKa57insSW5LRdZSt9B6oCUqHgjt31iVy3T6wdvaPKu64vwvUKVTQHZjTDbSiGsgFRDYbVgZ7kHtqb1CXtH3F9LtFvKPGMUVSpwFuMFXLpOoUttxAP1AUk4P21DbCSYaTYLkbf5WmLAXPIcE8llwzWcnILBI/HksrM2DpJsfbuKcm0apJrdqWxWpoQJNRo0KY8GxxR1JDKXFcQc4GT2GjVbtz/L2xP7Zpf8ArI0asr4H6rwdyqpc3CqMBZXAA/ABqe5bZbrCUzYPSjVdgJEeWsE8QlXLioDspJ/cHXFN2TWG7gnVpikW1Hqz8MNqriIv8Z0/p4FR4nJOVY761HRrsA+RSld0DBHZQy6tg4yPY/FUlFtOnUynSYkhhuS9PY6VRcUCRJ5ApVkK8JOT28aUF304bube1epvbI7jt06j1B4uqgTVFJaz4Byh1C+I7BWAcedOzo1F0V8E5yPBBwa0eO5e84zrLb9J4pgBLDNGssb69wSrfkUrViWZ6oadd1Cm3ruBS6hQGZBVPitKSVut8SAE4ZR9cHyNfF8WX6pKhd1em2buFS4FAellVPiuqTzZa4gcVZYV3zn6nTUaNDpDGuz+c/d3q19fn9T6r6fxm3S6WnpU0xnbbXxt8+1I1WNmPVPeUB23Ls3PpKqNNKUzEJUTyQk8sFLbKCodvy5AOtT3F2GnVLYujbSWXLjF6myYrgkT1lpLvSKlurVwCsFSlZA0yWjQEKYbJY7DBJOTimSfybkWezaNLWBbW4FwkcMKxoZB2DMF8nFV1pUuRQ7Vtmiy1IVIptHhQ3i2coLkdlLaiknGRkdtGrHRpoGABWDI7SO8jfc7Fj+z3r//2Q==');
