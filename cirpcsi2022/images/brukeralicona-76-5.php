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
    header('Content-Length: 1234');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRsoEAABXRUJQVlA4IL4EAABQGgCdASpMAEAAPjEYikOiIaEUCzSIIAMEtIApgWZBgCn9A7K/8X0Svij2d3O+9z+v/lF5AHiDtQf2z8svxm46Phf8s/w35Xawf+Sf6X8l+YG7Q9gD+O/2b/Rf2D9kvfK/gPzI/3Ps4+X/75+b39o+wL+Q/y7+8/1b9yf7n////D90HrS/bT2F/03VkJiG4RHTjpindBGjnEfH9THRQgoOGFtQ0bFN8K+5X7079OLG7E20KKyt0+jVq7nhJ/nYgYxrSnj04m0XceG/L3rTlyDSLQJWZk0xCgi/QAAA/v+lCsJWSehDRLxN0A3f/w0H34cUQ2uayOVgUuakCVq2AS/3fnX2oZYnY4GZjAHeE7AohHBgZXNQbIRNlAS47nWn/buhLef5Mw/0cyPwHCkGt4/7SFaFNTsOAaX2iVgsAutJQTXkG5RRGVcOnzEaU4Czd7PqABN454tyoG+p62DufibN9PHlzz2O61IiIndyc2R2gCaZWu+Xo/GK2KFaPAz3QJtmxPbqDDs5A6wWZMUi8u7KAANf6LoJFVt6LQxBd4BTWVyl8727k9U8/2Hl2IXNe0h6xX/7hwXeHwH4ep33NSZBDvbC7WblnQ6GMFZYLeXrsQ/Z9deetPcsIMS/i5W2IM/xtrxJi+O45+47+Rx/qXDtMLP1T5Fb0bZfj6yw0QGbUzNB/asO0LMg/bC7zi/ZO/zWGcqT/fmtlG+JCnEmto5XbuFz3wWC6Y/xjPkGJgEDIS25MPwpMT5QR4++L/6Here6vumEiwDNOlHXpTnWGI+9VqAIApTiy9UIZLQWHwUH98Dl//OL8k2yp+PDPYtLsHecvz/wl4m/H0ve6ffx/1Ryy/qpQG17FI0DmpnnHn8Y5EQU74Z9bTvbU0qP5uEBx2wE1ixzaoz+ki3UsfRtjPQcWlf/yZYWAiD9IM8x+cRIaVDFmObWi1BxY8gW14dd7HSFXoZ/9pOmexaBLb2NrM2QBSvbBj/TWb/qi9q5XRyxvs18mGaywC0LX8fqGEs8aFe5SHf4lh3FmBEkY0rcu222YvI0XbbxtL3hFvdcCuqT9dvAj9cemAnMXXhfQuEevVyVWhzoacYac1B4hjhqlnWUnPuXRwOahGyEOqxzKeKAZXbQFwLtxhqzhH0N4Sg5866LrngYJtv/vM3i/ma6DN23rHuD2U0ztubkK5fs8rNhEOazvEoDYQhWCqB0+hTqAShkrCZ8cuCys/qw3ZrTp3M3lkivQodDp2nbZ83gCb4Q8OjH+gPBxvaQXCj59WLYqtVSPIjEajqf4QUjNqyFqTn4YmNXf3rWy6RMJXrevju+N79p66cYyO49hL2geeKo57XkV0xA7q7pda5EvLKZAV1R9UHtXstjeRAoAgG57WcNzohW10mis9epy/OIwJL2UuuvArBKn1TwYXjRZWY9HvdzKMPDF2aziJebBMKFTjf7oN9tmnBMIhOeMWzwFH1KchVJyBm0NvuGs28tkaHGqtIItTb/S4Tx0C1fnP4Mjwu1gXrgqOYku5nrtypVkbCZCnRSFPYONLq/RjwLOvrTyohtxZpji/Wf9t+Gjyfon2DRtzQQlXZ4ISLe2TEcSsw0D7Pnp9RVyVHUJvgbsQAAAA==');
