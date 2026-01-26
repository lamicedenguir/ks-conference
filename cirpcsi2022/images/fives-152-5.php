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
    header('Content-Length: 2826');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRgILAABXRUJQVlA4IPYKAACwMQCdASqYAIAAPlEijkWjoaEUOSY8OAUEsYBrqBcoZaxvk9mipzywnKvVb4qvS+8zv7Kfrp7wfpf9AD+l/5XrefQA6Xf9vMo08y9jX946SH1T7S+qrmr6l/6T0N/jP2Y/Rf2r9xeT3gEfi/88/0W+ugA+p//A41Pmg9wD+T/z3/gceVQC/ov97/Yr3Yf5n/if478uPbd+d/4X/lf5P4Cf5Z/W/9p/f/3l/yHzXewL9s/Yx/V4/iqgERfcq4pAv2Uq3CUpj1+Nz0cMg5HxokH/mpaEiA6LGqmajAW0FWfpl+uek6actw5fVuHDD2GWZe5AHaqZqKaCk+E2tInLaWmdeGEC0Q2iepuCXAmZQZKbQhAcvTFYGl7aw/rw9J29k71i9w+IabnTv9UZ6f25hYx0PWQZwnEa7zn4UqxZ8Z1h1OgImzhDckuL3CkYG44Iv57AmOD7mV0g3T2n82o0nTM+uF0/2mO9H64RfusVrmxnrIgDEE2pMOBTtXIMGMCDXzyD2iTBNeBjRe+sMu/wgv5w/dby8xKwAP79wK443qsDpJPk6TVc5nxMPSqkg9LS2VpOZ6JEP+cPKn+NSY6p5CCayHhyzAzrgQpcku0kXrD/+4RTvWM6foVRzbKDBsF87BPwH+tX0WmvGSL+uTWrzxU+Ig8NEukr/g5sm1fFsEbzJN+F2Rw4pt0VzAClh3nRZxJK/5OQGT1yp6NbpldN8Y+GOEFTq0nFm23c2FoZFQxie29V/czrBF2TPJdLTcXMpbrqtMgrWqZHl+u+VwJyZHcDjwSNcjiAbih+Nz01qEJxSRQ8fDlOBQLps0OOlVoI/jBEFof6n8ee79MniEt2CwOH7PgKvZZBUCBA62478QGIS1THW98Nx9zVLbyNyTqFv8bj+60X6adYRGn1CjLjJL51BiVjBD9pBa6GdYlecv1MVYsvw/8DcIvTJjbULmrduE2xRozykud1j1sa9CGpdZBux6rErxo07ssZDE8DkyIyWm4xGipxCPLuW1OM1sKgWpoGLBuQc16PNVLVWPOWK8/8VZsRW0vHgCQdiX0DvPhjelK86V4ur1hoS1XSu7J6LJqhKj/SuRXnJC4rHph+U1PqnW0iXvhxAGtA6YIXLk0/mARIAJhv2+pWGhmH59ASzhiVvwoCQdzcHLxUAb0sX4yKGDE5Lxwl7BD7dWM5VlYE3t7FC9/0kfS1jTTbAChyux2FPT8/w/XljjIIvZ9IvHF8vLdssPKBvHu6Cb/FJGudO8y9AzbwxDeNBUa8CRtt15kBkSAIcYWv2S9wVV2z2Xh8hWmxRed6A7//tJJ1FiZwQG29obic4rWvkKRtdQZd8gHtgjA4tUDLDrtZAw4SU7G7WVQT35vkpWeMAbAxah0j+fxMXCPsUFZDsdlS72Id2wp7U5Fx4Iv81GgwKFj/oEiidGr/M+fL+8eaQRbUx+2n8duQKFPeV2g4XtvaSpxab8vcFgDcQW0iNjohcN9rm8MfeL4HRPHiZ1xpRMPRpp//7gu224S7WkVtCcRzJyf3rLA1aJH+VuhXfZ9Rp0fPCFKyy2lqBR66WRaENYVNED1o0+IQ1J5R+EgyQ4Wedb3aoTL+GgwSG6HN1CwNpgWv9Su2Fn3vBECUAv6vEDAxH+n/EEsxcqwjvBHx43edPDi2wbiQo8yN/KIu0277aito1/rhvEEIhuGV1IfolHGfRAZYjGuJZTlQ7/FNle/OGvtuPb3TFzkSSnZIXVJb5pywrBfUiHR71OeQ9dCiLaxpQM/fIwWu/9cqpJt2q8hUIyXyjg+jxsoqfu4ec6KmSuKmfFro5kfKC96kUzisWBZMc868b9srBYZ20OdHyukTGNtdEVVCI7YKK6U+/QXmgnTofYf8xK/Ervhiy3lRkVbVpSUbEe8FjVw53OKOfwQ3o3Vuf/hr+MJSX6r1nP/tnqJY7COw0nIg2EcwqMLQF9XHhBkySf/7qtXlX5LKjFnE8U+3g/XgGk1EialMaCadBZf2tnCvBZRfd/T4cRH25lMY6RUFdcXYtqGOMyi3mS4crIMk3VXAcNbdHPm95JODvbG3YY/JNsZICeZ3K3dCfFaZbifiidAaeL5iXASbrqU4AjnIcQqHKaxY5c37ADlzSeT/98/05BeK6PF17r8oqEYvsvKrwsUk+4sBX5N6nibHCAA+C9xUb+qmWXsYZsclC4ZKZRqrVkOuMo/JL5wANMLyGJpE3WMLjqQDw4uUjIJI7HH4a2Pv/oB9Ma+QR94OgA91s+WA7DFXUnuEfrhnygILdVgKxcFZnAtWwlYNJ9W9yBeOb05xI+hkdL+k+9l0S+cIKq6y3tNXQeVffxhQLFoqYb2ZN62Zn6VjhPXaG+/7O21Yd26OP87zBDQr5Zk+pLf3Z3qQjSxtiYsKiTtd67wvY4hVKioHpumO5sGAYn8qvhe65sZy9RcuKsOq7vHjgZCOtiY3SU3GT+8LOTn0vCjvJthZkF+7qlTXXoB8AdLw3dqTMhDuD4YqR+Ka+Nw2oaB3EGyU8vIo9NiUgATnfJPqe2JE/V1SUEx/VPJKi07Akc2LyBdacZVBi9Jefdh8ZrjIRxDeBnT3HUf+HuO1Clf1GyL4TwiQQXcyrYTp5eUCLBcXPyrjyMqMm3ISP2nAmVrAHdMkfKxn5PgIPeraCxbTJOiSgxAsE/5LlI8XM9AwXyBvEBJ3hIG2hJibq92xVZX75VSvqm12Ct7Ix3bMXevWqHVY5jzIzh6GEiIAnmWNDHzc5XEFXRSBo8RX8NDxFg8sd4dlWL1pq8wMNrWk32BN/JoN3XrV45UlkxQmbBcMdHW83G4zKBh0fKePUt4HcsnbC+xev18t0tkA6FyFMk1NLjP5mGgmzR4Po07jYHsm9KX59vi944h3lgBQ8kXBoo1jPAaaHJZRtgsNSKpT6T3F4dkmNFo1jLd5l4kxNx10RlrILdQdO2SaSjPDvaL7yTRy8d8KvzhxGfnh/eacui4ufOuXJnjMX86X+BVS5jnMIzJ0FCm/pzpfFvw/2+QvDEYWrkucxuzxx7NgzHQoiYNc41FX33zdz+QNNA/g+IUMhg53uutOwx+N49ZN/t1TUhnfqp4nf+HmELl6c5gr3zxa1WgoX5W6+nV6W4DxkaGArpMpHzpY3+DzO6YgCQ+ROKlQlPNVck7ONYiHzUNAiLhvOy8TZnJOZ/MocWJfxyfTMQHiuZC8JqKZFnjJD6hN9Z+jV25ssaxMZhcKkwS9v5CWExQq6kWEbNzLcRK6hlm5P6AwuJtf1Zbz4qeT5hQY2TPsaNATLkbfW38j0aEcRH7qExwUUdeFmtF2uFHvaZCh/PztcPESqCvzEPgGcSVxIAq99Y+vmJIWUgghf0hA74ZVqp+xPpftmQAAU5w6CVSo5e8H7LQJy6wl+b7CLxSbLUlgB4pGtH9TJo//9hFcVkVjMWZrhh8AMm4K7hKUhHCCftluTP/duAWEgOHCEirmZloLVMx30H+k6vwdg/bAXIr6Pe3DLwr+pNt1TpKgu7mmXVZccvt41X4RTiTmxK6vsSnzb6WVUOf9TpydmYT3PMRZPLG5lfbhQsFRgVLB3bHHKg0xKF4mi40KBqkOmt76k/Pjoxwz4YHHcpPaeH4ZI6RxtSGE4bt03jUehbCyADHqUDHXly30KAeQn0W+8XqAD95j7wY4hMuWH6J0PZH3BXZK7Wf8P7Vva90y6B9IKJ0DXauz0FaWUnU03nntzVI0swnynovAT9doAAAA');
