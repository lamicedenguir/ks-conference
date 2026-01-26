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

    header('Content-Type: image/webp');
    header('Content-Length: 1002');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRuIDAABXRUJQVlA4INYDAABwEwCdASpEABkAPjEWiUMiISERpqggAwS2AFshU2/TnAggHiO/2DpAOBN9ADyuf2M+ETycbm90anlX2AzhP1u+vcIO0h/Sfyq/KPOWfk3+W+0vXI/zb/W6mL/h+nR/q+WX6J/5nuC/yz+g/6br2ejgC/DrNaclVKJNxryUUHoCkjd+9achXFBjC0wZv+9d6dLrZUD7HmkhhZeshrU9GkdJbGKEAAD+/75IQRPRzwgT1uYiM/+Y3/qP3KUb2cBHCGNz3v0LfQF3GHkb+bXD8II3lTm2cjMCh3+OmGHjYZOvES3NCZ5yNxnH8F1i3/uFV4cN09PypUEA6O+F+1gT3f47XSpz3IpoD/n6eFVkjVdbK/ZoF2U5jmzL7cg9RifwyPMzuDvPbB/4m743ilqfn/xAm5p3hZKvdd5fNNJeTFJ6l7qLC39qC/VMtHJVoVkalvoRya099tVN3em53/M0ppCIJG7DDUsdG2AW5rv7RqGeDDkuTp/zJ++E9cgkov/+vBuKO6A89BgYasDsU/vZ2jXJWgTgAnwujvSOfQ4ikTfqp+nJP8OhQxrWgx9f8iV//rU5f4nYOhs4rrqdR6MdukFYmOcaTffRZDZ9tJiEnXTtMjWkGpkfOflmAH6GoAfq8nxLejFO/jwE/cCfT447rIH8lv/HU2v+A9mbX+O0n3jo4Hhy6DSIbaGEbZqLaDONPxqIM0zdJfAfcj2Xe7ceBH49ORMHD8FH2v01lGEvYP+4EVrHtf99d5IePQoX9T2Im5a7Ldwtdd8+If1QEjX8G0R9y8/5vXKRJon08wLwA21vrYaAhgQMjeP//4jLlNGyBuL+jFnXzLuW/xjPjmZeNoVTSBJcEh9Sdjuk5usNmzumifiStDS9bt//Fkfoq+IU//bXxycvEwXj5+9TfIJ5og3cz7IVvoMHWxhvVdS+P+Biav6CHO0uDq3cv+UY5PIAykpg+NOI4hpaLY+5IggPpmH4WUPEgkEFBbFjeXtYJuxkHKoKwqSTHVmcazeWL/t59gqRSkGPIDMLPbspjgtgnJ71/A0ndTnxoqmkK5y8XfX8EV0RTGcaHLjd/8Fh8E/55E/xAqe86cazrH//80XwaWNvp6TdtT05v7bTwrWPX4dd3++FCkhsSPwKzXqURfvRaSxulRzP/wZErGDVt5mw7uJr7PkuPbhdiUcz9nAyXR23dkW/0j8LJaeI7G+YksNHK/rkBbb048GnMNJJfo/FXnl2gxpdR+iIe/89twNTaI3thQaVyvNFU/GFIjtob+E5zrAJzBzIg7HarOeVOSI6CrbjQ7A8nQAA');
