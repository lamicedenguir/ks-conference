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
    header('Content-Length: 2092');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRiQIAABXRUJQVlA4IBgIAAAQKACdASquAEAAPlEejUWjoSEUunaUOAUEswCDAM1xsEcvyPnA3H+7ffn5csDHxzm/+8fcd7QHtY8wDn3eYD9a/1g917/Afpz7o/9F6gH7VdaL+x3sGfsp6bvsofuZ+3ntZZqJ/N+1P/F9IL6slkXGfyT66fr/MPwH4AXp3/O72iAL887s3UaVVKAninaLHqxXpBv0LbgnxpTuz4Gdij79fPFLqdvG05wmz6dMvf/TPs3MQGlVeSPYrdEh30wgBTermuR9aFTsDUsYK6hC/Huf2TEDoroOKz+p5wiCrTOVyEUtSO/exIaMKGLbqza/vKWTmBGQecoBSq9yk7MJyFrdXnudHyiMkr4PTHzEdpnEyJmIRZmtJ2Yfwk3Bgq1sD8WW3U3lC2wcuk/VOwzqoLUmvD3ilEQYjyG2u4oFCdQE88Pc2FhRVbDZsAD++kAyuG0mKlbrSOgO9aYkKXdKqbxcBswjNNu+Xo3/K+uY4vgm0GQWi4Gpkhfd/vqN7rsBzrjbf7S1c5NnYY0ghzJLWrRsdsQn3+xHEhDM8tXxDSIYx1RjtMWKxor8VQ52njHN0SkrR68shmtwiwl6XYT3JtN22lWbmjiF8aOXEdSrpad/a+z4Vi7d+3L7I++Y5ZSMcNIl7IbBLeoIxTZz6xXndPdF+hTrNI64ZpxuTLf8lDlh8WWRfcQ/32QiHUiUlyoQJLWv+SdFdiUqL0b+hyAnOqIocidlEKJaqQBdfRPEsU8GghxZbvEIr9zenE0MDHbShKj/s01fM8T550UYzAbFRprG+IEKnf7fgSBjJFbn157FT2DvITF95dN8Fpc3NU8Eu0SPgY511bpSf8GbGf4vLUvCUCBOE1wiLhwf07sMrme/wpS7JfEh3RrwW63BgnNXo8QPi045NjJ/p3/WCh1AzI2/P9MqsQ8uPlSpFQuABE6O/7fkzONo7Lo5EDiRTPHfhWgWl7RgirPNNJKmcQTg4Eh26BuQSv3bmjg21Jd8Msosa/7MhTJetNmmZmtcEhW+mhv4VtiSCZpFcu8wb0pu7wb0vWy0XbMXa9L03/L0p3s619wNcdobc6H8GVteeQ3fYR+rLqNEjrL6VgOwji015fdKyefDblp8fB7wYzHg6ELF9Z+z72EVYVH28g/8scz5E/XDfvi956HNV7c3r/MOJajyP1RI+5Pxq8+arHKgsSfCu/0dxCTm2qZ/IVYBW4l+4DM2rHL8YZLmCMj0MK47zbhSGXKWQHMvF+OqyffXYB53597egkubBB+M6cOz7W+LN6fvXsJDzmxCvthtCnZj//nP/eVabejMB5It7NyUC0MbMlvsBf97wpM8l7bxxYw/Gb4Hvxw1nFpyk6zP83ZwbBP0sOcjUbYfrbOYjzWUiTOj1johC7OH0Qbb0sCIrkmDUnlBl+wHWtp01H+Owq8nNPHjOBWmq/KhJ0MkpWzewekZvAVy73F7gEGNjsrfLbVWdNlp2nu5zR/wvXKZjtMIGol/hBnCzsPrY1lo09TAWD5JoYd3dT9mSDkynueA4OudAnrIO8u8JgI2ewi3sicx8uHiV5jdYelVvV0BdNYiQWRYYDWbj73Q94mQ2Tqy5rDIzcEcdphH3jLDnwP1dQuJlTbixL2leZhSLTGWv2ferT+Fwl2BEy/H7Y8yTH241ePPqOCkf9xxJ/Ft1bVqH8DkNm08yAtA64oC/PIxgp4nCzn6z5f3Wp69VeiLsl5NFqtF9jj46v4IMmsU0TUUTOH0ZVM/9Dv6Sy/AnbeSJjdADzJiEsRXtMZQkx8alr2YoW32nOdcFx+n8UMJY3x/TVH8fy/8FD2PbCndb/CF051p8KestnmPnzValLQjSMidSCpJAIms4tMsZMqcp1fA6y1kN+jXLtgNWPw9ots9pRYmv/+GiOPr2BE9cWHdf2T+SNXQjhfm5rkzBEVfoJwC1V/iJk3Ycj+QYfoij+ksavSH3mV8/+9v2PL36ZUOR5E3pasr2oQfDl0PtxPE5tO+qO7geIQjjrjb7lwrRQ5UUPjs/md9uw8LsWm0WZwy4wQsXEnB3a8s9SOLzRnQVAP/Y2P+IgaAzHY+1ooEZ8MzQzbWy3Pg5QXtUI1LzMJTNhAkAe4bxSkIoaY+ti9aK30iItZ8TlA47r21j6q87HkRw0pa7FkXyicoEu7Mpamp0PpO/4kIsFsZe8+d3f8Ytl4Su31mswwroagSbTZcoJt0RUZu44M6H/8AFVN8GgGpA5/bOLpiwtrLDWQHOzNBZmP5bcBvPYBWJi2/3bRCoRx6BY4L5hDNtvMtS/E9HYttWyiKHyZM8tP9f7Lf2OP9vkWUUUp0LFECdcNQ+yC+x0OZaKkxx+eXVMH9BQYUeUr3dee9nhdHCC6ATqXMoO9sPXWUGIHx0M2SNRO5JQKC04sYid5wNdfzUxzbmMzZ5Gripb/VzcfNx/IkS7/wfCbUmi+yFL8n3cBWmHc2tmWLKPIeaUqt6a9umOceCuAxo6q5SHNDUxEYajFA+d9HMoJMYrRi/9+/jPm+wCX5r9MYNK7PnbvHxYuc5V2XGlse+1sR+rV/xFao6xgz1iyqJg7Zmzj0tDOJ1s/HoOOBfmfuMDloRV/maqvOH5fBvS3V//c0+r5FZLbGbaUT6mQrbm9Wk+HuYzWK58oqA0GCPPk+XW3lrgQ69ojHl4NVBSZBhAPuSjXorB5wTC7QXCphr2NVbqy+Je5Od8dVshEIYu0O79FgQo5gXCAZSgj3dPyNHs5DaoICPIqF9/RwHzTMdSgAAA==');
