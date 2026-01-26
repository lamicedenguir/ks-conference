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
            $redirect = 'cirpcsi2022session2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = 'C2F10598-BE8C-4EA7-8CF8-E110759F3266';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    $fp = @fopen('1-s2.0-s221282711400033x-main.data.php', 'rb');
    if($fp === false) {
        http_response_code(404);
        echo "Not found!";
        exit;
    }
    header('Content-Type: application/pdf');
    $disposition = 'Content-Disposition: inline';
    $filename = '1-s2.0-s221282711400033x-main.pdf';
    if(strlen($filename)) {
        $disposition .= '; filename="' . $filename . '"';
    }
    header($disposition);
    http_response_code(200);
    header('Accept-Ranges: bytes');
    $length = $size = 906594;
    $start = 0;
    $end = $size - 1;
    if(isset($_SERVER['HTTP_RANGE'])) {
        $c_start = $start;
        $c_end = $end;
        list(, $range) = explode('=', $_SERVER['HTTP_RANGE'], 2);

        if(strpos($range, ',') !== false) {
            http_response_code(416); // Requested Range Not Satisfiable
            header("Content-Range: bytes $start-$end/$size");
            exit;
        }

        if($range == '-') {
            $c_start = $size - substr($range, 1);
        }
        else {
            $range = explode('-', $range);
            $c_start = $range[0];
            $c_end = (isset($range[1]) && is_numeric($range[1])) ? $range[1] : $size;
        }

        $c_end = ($c_end > $end) ? $end : $c_end;
        if($c_start > $c_end || $c_start >= $size || $c_end >= $size) {
            http_response_code(416); // Requested Range Not Satisfiable
            header("Content-Range: bytes $start-$end/$size");
            exit;
        }

        $start = $c_start;
        $end = $c_end;
        $length = $end - $start + 1;
        http_response_code(206); // Partial Content
        header("Content-Range: bytes $start-$end/$size");
    }
    header('Content-Length: ' . $length);
    set_time_limit(0);
    $start += 45;
    $end += 45;
    fseek($fp, $start);
    $buffer = 1024 * 8;
    while(!feof($fp) && ($p = ftell($fp)) <= $end) {
        if($p + $buffer > $end) { $buffer = $end - $p + 1; }
        echo fread($fp, $buffer);
        flush();
    }
    fclose($fp);
