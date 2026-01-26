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
            $redirect = 'votes.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = 'CF5714A3-7FC2-449D-B5F4-5F06269959B0';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'votes.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/webp');
    header('Content-Length: 1460');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRqwFAABXRUJQVlA4TKAFAAAvNoANEBXRzf5fsRfdOYczcp65I1zF3d3d3d3dNXN3K4HIUvqgLpu5c+c/aPjNcCKNSAlPA0T8qAAqoAWiqYAO6IHIYXdL2Ao2tXhzDxxIkhRFSSOoHHv+/61KjGzbtK1+TAPfsf4Ar23zcL9995EF2bZpV2XbOXed2LZt27aTL/vZtm3btm3b2PfGnBOAa6mnWyYx9r7Uz/mcdS6KTpKqTNzuH1V/m7PUuxiaYG5wLQMy/JOJehdBkVDBJyKN//J5cIk7i5hPJaePiN5bCJJWHzmLuQwQEWkwC0paI1Q5X+nigElnmA8lzodn/LtIoLMipPbzoOR0Q0qFuTgyBomoVhpWt0SKtgfxmihgwrn43yAkQ5TgELEnQZQItwbWrFYURek0Cs4XMInPw5/zjjSgs7MhagE4RBhJ4zIR/hFQt9esYysoQiNkBUtSemsTEJPyyOMIiYgE1wqYBrolSZVquFVuFRq2Aq1axnq3jCoV0BUcJSJiiCRFKo7HFhMYYxT61sYXANq29+JW5w1t7yu63lc2sl+ogosT5w2FpjqLmqJSXRkti60pVRQSKyZmARh2/VTpPs/ve889Bs09mzIOFGaTInjNWS9YfNtgocF8wTzOnP//8PGuagYSkmmMgQh6iSjUarTp8a/NPv6LAaPHpnPMWmH8WgsXrC0FlKTZ4KWHH2rwdQlDSYbOSs4TxnCAJSFbAuq0Eq2uF3S/PldNGB/yWLQW/Mw9+z9nT3rW7QkBGI2MxRqDq29Q0889HCxqBXs5n3gSZCIKtUKTM0eH64R+e49xa3Vy6VxwWPkerVr5Hoxs2WMCmqBjcvjeWcSRRNWgPqnl0gTWOb4nNOnl+fbn7V+vccTwtcK01xyL3qNn679Dh23/ruWm7+Dv7rXWR9MS7AyeZrlTj7QyKWXSfi6Q9rRAauQi8YuQjSF4ViU2qmX8qH5Jnngdlsxeqwcr3qPRDZ+O6OCvlXD4O1xzZh65bC/DRYnfKY3zg8Xx1nDxBI+dF6mNe2a559MpOvprLT31Hk/t3C+zWVI/xS14kccvNmx9LZU2f3u++//dScf3ZFLL47pRS4PYOKM+FfGsTJTqViu7Aee9evQ87p21Z99X/ybDO/79mp3vyZxT/aKfrVU1TxqOSfA1T4yqTjVEzyNeJi3yj/CgccuGOt9nDB0bTN2Lvys+06iNvzGt+iy+brgOPMqJ0S6TnjzxmeQy0WWCQ7dDl0OnQ4dN+0ubtncObQ6tL3yai3RJmMGdRlih2t7I5XCVNOgc5/xOf3VqQIOWoXM/YcjYPZs1Ns5YuGez5+zZyPKxIcQ5AgXJbsmOtqgjsiqj/0pnNec5Y5SI6C+3BjRuJbr0y7mxfU9YMHba49f659i16p0ydhRHHheTx1lm/omoM5BwqBVcZvxPKVyUiPzxjZbJN03IWQkYPo4Ng+Ye/ceBjewnqk455Oi8z1KgEDmDWI4gzvsMqMieBLtE1E+YvLeU4sD4flHqep1ed7xP6HBeWO+WUVgjZE3SBQUmOSbZJpkmGYJ0nTSd1Fs/+Xii6mbwOmcqWEn95cQyAOjQioJmLUOjlqFRctahlBS2B3GHLE4/haaC0zk4xNgJBYtVKRHx5wH5PH6UkqIAYGWSVPkIt/O1glcDapea1SuRwgAfD87rQGowpy3SiPUsYjKpUaQZ/molwkt82jDREcECMVYSaqXBXzyJ2XmiSihiLLhKxOiRlCrEXT8xqU6pfzco5fmOpRYgqAQniEiDmfWFIuAXwT7OO5sA1GAXuekouTJCs3hqjBCRxn8LQRQ0R6aENhKodLZSwIKLlMwcloy+gMa/5N2iEIle0p4xhBeJi5rOrjSg8TdxuC6ZyhgPSHQTB+VTyBFdHECZAMF7yvA3g+7FgBYYG1zOMHBxoBsqNvPvXxxQjy+Sq3k=');
