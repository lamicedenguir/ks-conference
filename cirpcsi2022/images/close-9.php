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
            $redirect = 'cirpcsi2022session3-2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '0B3CECD6-07E5-4911-8B85-D227E7234171';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session3-2.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/svg+xml');
    header('Content-Length: 393');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDEyOCAxMjgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iI0ZGRiIgc3Ryb2tlPSJub25lIj48cmVjdCB3aWR0aD0iODYiIGhlaWdodD0iMTkiIHg9IjIxLjEyMzEiIHk9IjU0LjYyMzEiIHJ4PSI4IiB0cmFuc2Zvcm09Im1hdHJpeCguNzA3MS0uNzA3MTEuNzA3MS43MDcxLTI2LjU2MDcgNjQuMTIzMSkiLz48cmVjdCB3aWR0aD0iODYiIGhlaWdodD0iMTkiIHg9IjIxLjEyMzEiIHk9IjU0LjYyMzEiIHJ4PSI4IiB0cmFuc2Zvcm09Im1hdHJpeCguNzA3MS43MDcxLS43MDcxMS43MDcxIDY0LjEyMzEtMjYuNTYwNykiLz48L2c+PC9zdmc+');
