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

    header('Content-Type: image/jpeg');
    header('Content-Length: 3632');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMDAwMDAwMDAwMEBAQEBAYFBQUFBgkGBwYHBgkOCAoICAoIDgwPDAsMDwwWEQ8PERYZFRQVGR4bGx4mJCYyMkMBAwMDAwMDAwMDAwQEBAQEBgUFBQUGCQYHBgcGCQ4ICggICggODA8MCwwPDBYRDw8RFhkVFBUZHhsbHiYkJjIyQ//AABEIAFAAXwMBIgACEQEDEQH/xACmAAABBAMBAQEAAAAAAAAAAAAHBQYICQACAwQBChAAAQMDAgQDAwcIBA8AAAAAAQIDBAUGEQAHEiExQQgTURQiMhUXQlJUYXEjU2JzgZWh0xYzQ3I2RlZjd4KRkpOjpKXR4fEBAAIDAQEBAAAAAAAAAAAAAAAFAgQGAwEHEQACAQMEAQQCAAcAAAAAAAABAgMABBEFEiExQRNRYaEUcRUiMjNTgZH/2gAMAwEAAhEDEQA/ALU9ZrNeKr1WDQ6bUKxU5CY8KBGckyHVdENtDiUeXU8uQHMnRRTNvmfMqLlNsWiyXo1QryXFSpTPJdPpbJAkyAofC4viDTR68SuIdDr0tbT7cBtA/odTAAkAZQVHA6ZJOTrhY9Mm+VULsr0ZbFauNTb7kdzmqBDaBEWD9xbSoqcx1dUo6TNz94LH2ipCapd1TKHnwfYqdHAdmTFDqGm8j3R3WrCR66kiPIwRFLMTgAVF3WNS7sFUDJJ6FLC9rduRkJs6lfiWz/51h2u22A/wPpZPfDRxqte9vGvufcb7rFmw4Fq08EhtQbTOmqHqpx0cCT/dT+3QoG/2+LrofXudXuPOfdW2lP8AuhAGNNU0W7ZQzNGmfBOT/vFKn1m1BIRZHAPYGB91b+dr9tccrPphP6rp/HXb5qNuP8jqX/w//eqwrW8XG9VvutfKVWg3FGSfeZqUVCVqH3Oxw2oHl3z+Gpkbb+Lywb0cj0q5ErtGrOkJSZqw5CdWeWESAAEZ7BYT+OuE+l3cALFA6jsoc/XdWINStZyFDFG9n4+6MlR2lsORDlMwaDGpchbZEefCBakxXRzQ+yoHkttWCO2RpZsi4ZNXpj8atobZr9HkKp1XZbGEiQ0AQ+2OzUhBDjf6Jx1GnQhxDqErQoKQtIUlSSCFA8wQR1B0PLzbFo1iFuJFSoQ2mUU+4205IVA4yW5pHdUNaypR/NKX6DS+r9EXWa1SpKkpUlQUCAQRzBB7jW2iivmhrVlJvG72LbHv0a23WKhWhz4JM7k7DgnsQ3yfdH6sdDpzXlcK7eorkqFGTMqcp5EGlQs49qmyPdbbPogfG4ofCgE9tbWnbrdtUSPTDIVLlKW5KnTXBhcyZJV5j8hXpxKPIdEpwByGiih7vdvFRdmLNfuGehEupylmNSKdx8KpcnGfexzDSB7y1dhy6nVKV13fcV/3JULru2pLn1Se5xOOLOEtpHwssp6IbQOSUjkNGnxUXvUdwt761SIzq3YVvyk2/So+fd8xCgl5YH1nHSQT6AaOF51vb/wyG39uKHtpbl23KaUxOuGr15kP5ckZ/JNAhRTnBIAwEpxyJOtNYxLZxRMITLcTqSBnG1Rz2eqzN/I17JKpmEVtAQCcZ3MfgVCCOyABy0tMRgcZ1M2t25tTddW2s3Es+lUenpuaPNbrNsIW04iLJZYWtLvs6fgAUkgnAB9040w2q7Qm5b0VG39GFsiuKoypHlpMovnJK+fPGOYA6DlnTeGVZ4llOUJYrhuwRxikdxI9rcvbxwGfZEspZCANjeefPFR/TFHoNcnIySDyBHfU9LJtawbOsPdmt3JaEK400KtRVQW5SAp0peabW0wXSMhAWv3vUZyDobyrnpl+RqjdVVsK2oLVqwV+RTqRETHRJW7lfHIOCVhASAkHkOZxrnHO8k8kSxHbG+1nJGOs8CrU7ww2Md6X3CVFaOMDk7jgDngUz9mPEXde08qLSqk49W7T40pcp7quN2GknmuEtXw4/Nn3T2xq12jV6h3pQIFbo0lioUirQ/MZXjiQ606OFSVJPQ9UqSRyOQdUzXHeVMr1GlwpVm0iJN421Q5sBHs5ZAOVBQA98EcgOmpKeCjcKTErld2xnvkwZ7DlWpySr+rkMYD7aAeziSFY9Uk6WatYRmNrqEAMvLgD+oe9MtIv5ywt7mNkDHam5g2D8EeDU3LGdXb9Rm7cz3luKpLIlUR908SpVJWeBCeI/EuIr8irqeHgUeuiFpmXrRKhPhQq3QGx/SC3nzPpwJCRJGOF6E4eyJKMo58kq4VdRpyW/XafX6JTq5TXFLjT2EvNcY4VpzyKHE/RWg5SpJ5hQI1ma01MS3cXjc8q815VSaT7RS7fSfhdXkty6iPULI8pk/UCiOStEnQ5oijZd4O204SmiXM9IqFGUVZTGn4L0uCM9A4AX2h/fHQDRG0UVQrWFfJu/dUXUeQjbkOrf4vqoqPEc5+7Rg8XcaRF3+uhx9JCJUCmSI57Ka9nS3kfdxIOmJ4pqAbc383Cj8BQ3PmNVRo9MpnNJdUR/r8Wio1vls/uZQLcjb8WXXJVxW/DRCZrdBeShc5hHRMgKW2QT1PUZyRjOtepfFndpG0i+gUYJyRnBz9VkGEeby0kkWNjNvUtwDjPB/7TX2itK5adcdnXZOocqPRauJrUGoLQAzJWhlzKUEHORwn/AGa9KVAUCV/pQI/5R05K/wCIWhVy6LFj0e2pFBsazosiPTqczwuyFqeZLPnODiCcgcgMk8ySSTpgIqjLlnP1NIWGVbke1AEDi4DHLuMZ647Z1aDSvFCZk2N62dveB4z81QMSre3hiJeM2aKHxgMwJzipd1dwI2i31P1a1R/4tR9RDol21K15y5tNW2oOo4H2HRxNvIBzhQGDkZ5EcxorVPea15tibo2uxEqaZdzVGnyYLi2mw2lEVDSVh3CyUn8mcYB7aDtt3FbcFmo0+56D8oRJvAfaGCEyo6m848tRI5HPMZH3515ArLNdscqGmLKT5BAr19v8Ms4nh9UpbKkkYxnvnvyO6eU+Fat/2/cNYotJNErdGimZJYaIMeQ3gqJAGBkhJwQAQeudJvhokPs78beKjk5cmSW1Y7oXFcCv4aTKpfVr0ig1ag2JSJ0dVXb8qbUKg4lTpawQW0BJV2JGeWM9NEzwZW07W93XrgLZMW2aPIkKXjKQ/MHszSfxIKj+zUr9lSzuGbH9pgf2eBUNHjlNyihZFjM6mJZDllUd5749qtf7aGnmN2DeEhiS+lm3rredlsOrIS1AqyUFx9sn6LcpCS4nsHEq+tol9tDanNpva75NbfbDtAth6RT6WhYy3MqOCzLmEHkpLIyw39/mH01ha+gU7Luttu46FJpiJK4kxKkSYM1AyuHMYPGw+kHrwqAyPpJyDyOvPaVxruSiNSZUUQ6lDedgVWHxcRizY54XWx3KD8TavpIIPfTl0OrgQmzLoi3q2kJpNWVHpdwp5AMqzwQ6grp8CleU6fqKBPJOiioa+PTbKRMpdsbrU2MV/JifkmsFIyRHeWVx3lY+ilaikn9IarMacxjX6Ma5R6XclJqVBrUJqbTqjFdiyozoyh1p1PCpJ/YeuqO9+tja/sjdbkF9L0u3J7q1UWqFJKXm+vkPEcg+2OSh9IcxrSaPersFrIQGU/yZ8g+Kzes2JYm5jGQRh/jHmhTHkY76KLMgfNao5/x3SP8AoDoLtu4OiY2+RtOtWel8pH/bzp3Lg+nj/IKSQFh6gPiM0mJlHHxa0XJz1Om6JZ9daqlHsevIY7511xUfVBGOT8UruPqWpLbaVLWtQSlCQVKUpRwEpA5kk9Bq5Twz7Uu7WbcRo9WZ8uv1x1NSqwI95lak4ajZ/wA0nkf0idRz8LHhmmwZdO3P3Ip6mJDXC/Q6PIThbSjzTMlIV0WOraDzHxHnjVhUqRHgRpM2a+2xHjNLfeecUEoabbSVKWonoEgZJ1l9XvlmP40JyinLMOifYfArTaTZPEPyZhh2GFX2Hufk0zL5q89qPT7VoTxardxuLjR3kdYUVsAyp5/UpOEdi4pI76eFDpMGh0mn0inM+RBp8ZuNHbyVEIaTwjJPMk45qPMnmdMmxY0iqPz7/qkdxmZXmkIp7Dw4XINJb96OyUn4XHSS86OoKgk/Dog6R07rNc6jTYFTgTadUozcmLMjuR5DLgyhxt1JQpCh6EHB101miimHYk6VBVUrHrUh2RUrdS37PJe5qqNMdyIsoq+ksBJadP10k9xpfum1LcvOg1C2rqpEeqU6cgB6NITlORzCkkYKVp6hQwQemkO+qRUGW6beNBYXJrNuqccEVvkqoQXgBKg/eVpSFt5/tEp1q1uvY/loPtVWBUkEhVFqQUM9iPI5HQCQQQcEHORXhAIIIyD3Ve+5fgNuGFIfqO09aaqkJaipNKqyxHlNA/RbkY4HAO3Fwn1J1HWV4e/ETCiqoTu3FwrhiX7V5LHlPMl8J8rzQULIzw8s+mrlvnYsj7ZVf3NUf5Gs+diyPtlV/c1R/kaaRavdRqFbZJjosOfqlsuk2sjFgGQt2FPBqpW0/B1vtcj7Yn29FtyKVe/Iq0psFI9Q0wXFqPoMD8dT32c8Jlg7XSItdqy1XRcbOFtzJjQRGiLH0orHvAKHZaiVemNHP52LI+2VX9zVH+RrPnYsj7ZVf3NUf5Gudxqd3cAozhFPapxn91O30y0t2Dqm5h0W5x+qexH/AN0Nbm4bwuGHYjeV0yGlmqXGpJ5KaCuKNTzj7QpPG4PzacH4temfu1bKIck0iPWKrUPLIiQG6TOaVJfVyQ0FuspSgKUQCpRAA5nS5ZdAft+kFFRfRJrFQfVUKxLQMJfmv44+DP8AZNgBtodkJA0vphTl191ms0UV/9k=');
