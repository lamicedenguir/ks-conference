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
    header('Content-Length: 3446');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRm4NAABXRUJQVlA4IGINAAAwOwCdASqEAG8APjEUiEMiISEVmXZUIAMEsQBLZahF078oPZFqD9N+9HAwFE6v/1n9e/cD/Ve7n+3fkB8gPyx/r/cA/RL+5fmr/e+4f5gP5V/PP9v/eveJ/xX6ge4r/HeoB/Xf7f1hPoAftV6Xn7ZfCN+2X7O+5f/bv+ZrL3lHsP/tvhn4XfJ/tXy3+bv8B6E/xn7Sfhf7B+3v5b/G/+q8F/hp/QeoR+P/y//CflB+YXt8/uHbB6j/Zf1r9gj04+Z/5v+2/un/ePS7/pPQTxAP5T/LP8V5Nn+78Qbyr2Av5R/Vf+z/j/yA+mH+W/4P+N/dH/Ce3f84/vX+6/x/7zf4T7CP5D/S/8p/a/8n/zf8d///+l94XsQ/a72IP1QR+snHULxuYVxtET4Wo/4+I2fNGlmwx2zb2+fdgh51yuEBu/SPnE4uLf/OTLpTMTs/rqE4AlAstOKWeaymqslyaHZ6ruRBaYMg7te12EK5gGn2/4vt1co6WuLPo2wC/ajwQiFat0uP7jpSyO0bnacX86bu1OTKMDZCOpQF1iK2/4vEi9eH+tVqb/fa3yW3N/x3HTaVaLayL/2BzKHZ+CJoCCn/gDAEG1BSS1k6UkFnSqW5/Ecqf2eJPZxX/DUXfYI6NwLYwAD+/vh2/TYt26VBskea7PuXweriuZybIuUu5XkK4Hoe/MmM+pVCA0HDruQGHqoR1dN9ZB5LjaP4AdKlFr1I8C/YqlXXTDIrHKcvXrxv51+zrHI9USR4GYBJETA4d2oxAi3/93et93Tg1rv9yO8NokT6Lfe4dI3rwb2DpFRspkbu3mM5H7m80HFmy/mjZgg/ZfIWUAn8nJ/4wcHbPJPimMo3uiSf2kJ8N23/8XdhV1Ck/Jq9UQrRYtLxfr7b53/bq6ZO1V5EbXh2PZVOTpt4El0ycEQiHk5p0u6nP2YR2lclEKIR5V3vicpYlkXaqxZQdneDu9CCQo1HkFb+llEUJbDZmhajn3AX1eFwt0uN7TP8tt/2jFLUYgXYxlCXvc+EJILdRU1yCQNwDpHxr3c0ZbLp/6HR4hbv8UBw65rciH3aayclwFbAU3Y6c9JypfDi5Xfj1dKkoDHo/MByd8HeX6uVsItXJzrZck1Q7z3ehF1868EqiqlY089iOzqxEwuLz4Kqx1dQZc9OWZKUEGRL9xTakBfA4JZDoMEtZHi4gKZSu/7tmgXQmrYQr78ha8ufkzPIc/UMS0nVnNGhK9rlA/n0P4XJJn/d6Yv/BtNL3g+ZSwapP9iwhDJGUEh7EUdfWZbEM62TkJHy0npXEpyf/2Ujsh62wJbGZJfywk82PSlt8hYRw8n9VBARMfBx+H9FM911Uca3CvmIyQ3FVg7rrYl8rWR6gPCxwAZ58SMmq0evsQylWgLROBTqflquG3DMPr5tJXKYo7sXhns8a6Vt8nXd7S7TAbsTPOwYDc6FS1UenmJG9gmeQ4a3pj6RaTx075u3Dr9nsN5iMGXH9um++FlHVTqFNYYWMwYUZ5WveZYZDJgXkfTvOR+ckXXF0C92ouh/5ygKmi/grc2Da+bfpZQr2AbDJT5vbsPjaa2ks9btm2cBiWnVx0zRE3xwD5Wy1GoX2r37pT7RWgKoznPZCaHD/gifjscBLZ4fDhpnIUugZ0htY2sc9zD+qpveW7U5swyr6/ActBT6wlMjIiMlx9YDam8sqc/XJ7EiVFuART3Lx97XuS6z/QuaObzXXFjnPjpCkXrg9wIXa8b5oMvZVv77+WZadH5lWaAcSZ4dWsa1XH+AC37c15xithuZk4NZfOzyLlbgpfvwIJqqaY/5XFHbuRfdcHOr5SadoLc+DSRrodV3TZjWqTmANl12oKT9umF60dfHohOLdK0ungfygVllZcI6leff4gTy5Ls8Fd0Vs5BFv31Uh7u++DPksWA4FeW2iuBW0itvs1AMBfKfvziKZCLVnTtrrzsoycewJ1TiPqHY08mKp/Hz7/RRaClC7L6d3kKQCqm5woZR8D1SE021ra3PpUL9FUPr7PJAwplPx2ua3SRwRjN7gHAixY7zA/+AEhpzAMTotI5nivKZDrNvkdvghFI0/oEhurV7GjHeaOSjg0UsgCxz9c7DKbi5Q5KsAOTuN0ZC1w4bioj3f+hYPvOQlzVO1o70CwutuPF8zFrEX6Y+u0vP0KXa9FGS4n3jAbIi2yKvK0cju1uVtevdsid27/pBZoKUH7KgQxro4m1OaDs+hQl2VlX8rDnQhq73F17ROiYPixpMmlNnKJsXE+gvSucGpNeEcBhNdEmyAtfg17Duheb3BFDQx5SaqthLjmO0g7he8pX+87NevV7I6sjLmcK0ZRSy6YquCP8Afy99Au2hJyiAb8neZmZ8IMORZkHwVlpjxo/259OFYI65drCgRUA4p/vQ8tlgpbb34RFeJKNbh6/vczJKkZfiYac7tyU6VhYRk0DINZiYCNuIMqis6pK2od1SRH++DJ0NIu/8E1hQVn66plAaz12+m9fTta60GIvtayiHDtVxdX1nwQ06Udhrd02D5AlRJbUQ2okij4IM6At0wMU4EGSiF3nIvTw/RdHNPSmWyCK+PFCYOEDb6XpcvfBt0Fxr/rqbT1Mq3PYLydAVN2JFPnVlma/s19KrM8lhaUSiUTd8ugiKHnBuXsUdDJ/AHnfVbV6WKGFuIXGgZyC8pQAFjgfBghKoaEdAaYXHy0ZcoRnGkFVWrVTo8IFbKx3rx7MuR59g2X5HmwVKAZ8ELGCzrNBb+zpzf2/7rO5RV8qkkY2nhiPW0CKR5DnhFCBRi4Ff4YBqXew+NsITtGlUWMBpMzEwV+yiKPZrUUSOY4TNin26N9/7ET36XqEMt9iydpDLy1v5DmfEYV5cPxbP+aknMIctzX6ZQaIwO2C6sQzOHKluM1ICicr0/whQR7Q50eUjuChQdVhfxJ+kpRwfhpMoCBIRl552NgcpvRmY+c8h+lDf94Urq+4YL1ZTgy39gcNJhSS39Vaff1Yl6MyGuAJXkT76mayThdodSxldXEK9fURL+h4ZwoX4xjdHesGUsG5VKr5l65FJRVoBZ+tGAq878eEmAXe/PNEy/K9vxZ6etA0uUI+jRmhTIbyo5r9/t+1iJsh/vn0wbAflTtCny8P4hQK7R5xJqHsiGKNNcGtuknNguJii+FlSM4rr5uQk/sEg/S9uJOrDtKXjorQUr+FOIRisn69UzQ/VnlwfVYNysaHilBW3zdZh2hJQAdzrYjEE+7d0TOajbrwVtw4ezOn1Yno5TNnedPPJ45kuVqEP3abA57GL//02uQOsZVLyP+BY78+uwMh4AX+KoDxfmYTWML1Fg7VXfbvnTexGB5dD/bB/8nVAhnjStOZTxVwyyv+Ry1iZN8c2K5UucXUJLr4Yw6HirdiBsNFmVDO3xqjNy0rOf5s7v0Z6DJDJdH1+WIFwvzxPPlWrAN8jJpNNACwQB5PcpoC+C0PRevSM+u7Vvb2D3BeEeXNZ8OGZE6sanhMUnP7HqWKXQFrYM7A8du3MrAy71RqG2J541AJGWCzJN6GyO8/dtrz9vjA002zRL0LuRPZ8Mopggx/H0n3vmkoZgjr3v2mnTPE31Z0xcVV2ApgVv9TBGj46ttKddzv8CfzhEmS+ZQcWGS8KUPJ6oJMB2LC1Mg/L8P0tfzMKDuyD44QY9J+cfFmQZ1CLKlrL+3WAps1AKN49B9mdrAS+ba5XDgS/icj62m5XEQRTA/bDtvAAZfatZklSFkmDFmni7YX0TJbP+PFyFru5jc4bNl6TW9QKqxuojxs0oBztAAu7JhuHqj/oAdHvhmbGhWcyU7Jh8Y3RKUbP4vCgGrKpU3RBev/cgRZCl22ilxMTv/vJTMC2IOYNmS/Cv0LXAVcWjXa/b8mhrS4IbtTroX+lR9jsC0LEg7K7V+HukCZhRU5rGIm7YhHInJ42vqQR2JIU/e7SsvNu2G19SaqSrzI4HuHkH6oEybwrHV7Lre06lAZIJzJ+xnBrCuIX5tYtl+jIrQauzy50gZFL4Y9pnWiooRo2fyL0UfbsD68J1LgeAzo+m/Q976CHvKjYVYods53Htc4627VkZ9X7CtyqWtM0wgRpWWea+U7qlstBAfmFY7yEVhDDDLOtGnYh7rP4NmYg+6dV7NSUDC8r7DUplF1K0B5WLwl+HNU2nSUNH+yplAHb5U2DQ7bKLq+G6PleJfcz0wIY7EDzexWF54WVWSKn35lXUreJWDmG0BSCRB6xbtVjJJ2R+tUlLPk5PFP6Hne1U7fY5fIJpCIzb09o16BLYezXtY97lB5uhTZ6WIKBF9EOsu2OpfG1I0upPA9Iut3+DaD8dKoHQeyBJ3qdvG5M+fP8qiAht+hmw3+Qdr8rlrrQmuyFMKCPEk5hIdfapIWGQNTDf/hIArPl63FaLt7s/ZQf9xO0Qlunbrni7wQCej1+JW5F9w6vARak6iEXLWJtucB2kK4UQXKpD6362xcEbrVZ1ugIkk8wSRIptPfVjPqccw37fZXEmWrfCK4PKYDtjAIXCDqTL2QI/s7OdybapjnG3rgZre4YwAdOVdi2NQ3exMMgAAA=');
