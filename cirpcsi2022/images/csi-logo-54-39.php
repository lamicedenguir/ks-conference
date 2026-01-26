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
            $redirect = 'cirpcsi2022session2-3.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '0B0D709B-FE71-4D06-AB4F-7E4B29B81FD6';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session2-3.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/jpeg');
    header('Content-Length: 1190');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMDAwMDAwMDAwMEBAQEBAYFBQUFBgkGBwYHBgkOCAoICAoIDgwPDAsMDwwWEQ8PERYZFRQVGR4bGx4mJCYyMkMBAwMDAwMDAwMDAwQEBAQEBgUFBQUGCQYHBgcGCQ4ICggICggODA8MCwwPDBYRDw8RFhkVFBUZHhsbHiYkJjIyQ//AABEIABQANgMBIgACEQEDEQH/xACAAAEAAgMBAQAAAAAAAAAAAAAABQcDBggECRAAAQQBAwMEAQMFAAAAAAAAAQIDBAUGAAcREhMhCBQxQVEVIjIjR2FxsQEAAgMBAAAAAAAAAAAAAAAAAwUAAQIGEQACAQMEAAYDAAAAAAAAAAABAgMABBEFEiExBhMjQVFhFCJS/9oADAMBAAIRAxEAPwD6O5bnDGOOKjocjsrjIbflOy0OFtthxQQCgNgqWsqIHCQdanQbrxZiwoXEW4hsqT7p5iI/Geb9wT2ult5KAscpIPTyR968W6OPPWVfllKFsRFXzUX9OsrBYUwxJZJWpr4JSlQHAHHHk860DDsWkVVrlkpNNWR3r2DFrquoiSkypDKIaShyY+pBLSVOBXPKeD8cjnQyzh1AH6ns0yhgsW066nlnK3KNiOMMAGGV7BGT2evip/crdPcGVuFE2k2fr61y7Famys7KyBLEJlflICfzwQSSD8gAa92JUfqcjZJTyMxzXEplEiRzPjRInQ8410n9rau0ng88feqxu76Fsh6jLDLMyTLaxvLMYiwWbUtqkJZfipbQUulIJ5/p+ePPkHV9UHqC2gyi5r8eoczjTLKwe7MaOll9JcXwTwCpAA8D71gEFm3yEENgLnHHtT+5gubfT7MadosVxbS6ekkt1+N57b2HqZfnbsPGPbFUhE3A383Vy/O4W2drjGP1GL266zosWe9IeU2op7iuUrP7unn4AHxq5dtqvfWut5ru6OUY9a1ioZTGarI/ZcRI6wepR7aOU9PI4/Oue8/h+kqzzK/n3Oa2FFemY6zat1b8mMlclpRS4VpS2pPVyPJT4J86itnLSkrd+q3Htn8xvsjw6XRyH7lE9x15mO8gK6FJLqU+eQng8DySNYVsONzbiWxw/wA/VMbqyS5024a008WccdkJcXGnbD6agti4JOWY9H3roTYTcDKM8VuWMlmMyP0PL5NbB7bKGeiO1/FKugDqP+T501pXpSIKt6uD/cKb/wA00aIkxqScmuW8QQxQavdxQxrGi+XhVGAMoDwBXVDjTToAdbQsA9QCgDwR9+dIdZXV6AiDCYjpBUQG0BPBWeVccfn7000Sk1LGsrbeKuFa18WdGX/JmU0l5s8flKwRqDhYHg9ZLYn12H0UOVHX1tPsQWWnG1fHKVJSCD/rTTVYB5wKIs0yKUSV1Vu1DEA5+RWOTt7gUyQ/Ll4Xj78h9xTrrztewtbi1nlSlKUkkkn5J1MVGO4/j6XUUVHXViXSC4IcZuOFkfHV2wOdNNTAHIArTXE7rseeRl/ksSOPqsldS01N7tVVVwoPuni/I9syhnvOq+XF9AHUo/ZPnTTTV0JmZyWZixPZJya//9k=');
