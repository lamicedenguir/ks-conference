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
            $redirect = 'cirpcsi2022session1.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '8B63F4C2-8582-440F-AB5D-CF89DACED4DA';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session1.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 1244');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRtQEAABXRUJQVlA4IMgEAADQGQCdASpVAB8APjEUh0KiIQwGA1QQAYJbAC3c7SD567yZ3HRjp1hfi/uZ6ADfReYz9QP2A9nL9AOwA/ZLrN/QA/ZX0sv2d+Db9uvR2uZ34ofsZ2oPiv2A/bDQI/Tv7t+V+mHfyj+5/kZwTHIP55/iOMvuLf9jxg1AD88f877M/pM/nf+55X/pj/v+4V/Kf6n/r+xp6LQdYz4/uwHadEfP59oz97aDNHrfnhXhy+RxWYoPvVzI0MpdX6a0X3sj9GclmEGplWRbHYSB5fFVhO0SaCT0wyel4AD+/737YPmDnRwIfBZOSWZ8Ag8LA+/ywARY0+9U6EuYlmKR70v2hr99iehdF9qVWL8PLHNeYeAkbIQK1mtWcIi2X0hd3OPOOpVflGh7U28CXNH/CWGP1Ur22Tafj+wk11ug7/2nwZY//JfV6NTKUUAlEh/ypcDkRqZ0Q3uu/Y4Ee/3+EyjxaBzar7W/+leH47bEK67VYB9mtuds8Ull/9Qmj+lyeZO+Tiys1Jyga71AN/xxOdtc/FAhVdBzOT4Ff5BrV5oYxDwre216Huelu2n20YGtfY7ZnK5VKyv2Z7mTC9Vj+xFuQwpxxdoVBONNIuuIZLqGd4OjnwQ4p6k3cyi0E3L2d68qeZ+3f4kBTSMdZX16zx9iUedUXIE0AwoYlt1fP4zM71VwFf54Ggw93YLniyLX/Zq3CrTL3D7g29UxgcMl1ffT+FUa0+BZieDLB3iqvjk75PjVOfFd0zEe+0y/Y7pHPtRP79C2AL30p/WdCfDR5dQhT8Oa1E2/sDnbhPPj5rCBjlrB9gHHYg71/R3HHTfeMAEqdwf9SF+Mi8ae9cpW54LVprPgjthHgSCW9Mui6SPFh8Ss5GO9SpyyPb9CqRcRHx8eBKLkUf2iwGxO2rAyPL/D/x8hOe7I5O4KuOi2zGPlawtJe0d76VnEm5nQN9MqAAbemvDX+uca/WlqbDlvUv8BQd4sv8iqtD/4aSH28RrjLzvT4qCn4cTYhR1BEakE/arCD6gPD2fiZklPLNp8zSamELSLZWMDmN+HS179nVEQFOJL45WSFeCspTYllptWeSMH/56cWIZQaHhWI94PgGUWnfWwWz9z+bdaf/2kg95xevdTLHM/7fKtOS/hJbe8bLN//vfwsiFY2RZZroAqeZFT96WM4J8O+1Of6/2HHvoPnNvVcPvEwTPjlZqBy6uVSIhReFy5Gv4rZOlo7IvzjwIuE1Ke4X/A4p4MB/yCUbqli7H40SVOzB1kKKQUqgHBSHJaTsIK49+OD15IduuJ/dqTgV7ipDcTLf7ipy6Y5L9OUYH6R8ImAwFcQvv9Fc/VldqVoqQqgwIeaujDNwpd1f835UWeQOtM8PbY6gpv9r4Ip1nH3McGnauq07mOc5cSjdQJ62cjmT+DmGICS/3/xryws89fWe37AR+2SoRgQ+TGVdgsRvp5/YlO0OdOP6Kpp0d59wDDNCAi0WJ2un58wQCkeeIxz2z9JR1r+yXbxvEBnt58sACdelyAvx0TUToQ5C958es9EP40iwH6nRDyLehYhmXJV0iUDkyuUHLZJPmBe9Tu6X3/YOGVi8MB/GGIrCcVI8Au4iMiuQGRMPkGYhMcMDM/4G2+QAG6gAA=');
