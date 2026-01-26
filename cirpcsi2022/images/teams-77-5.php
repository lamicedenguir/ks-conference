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
    header('Content-Length: 1384');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRmAFAABXRUJQVlA4TFMFAAAvTAATEPVI0v/PkJ5T5AI5iI0X3TXTXVMd28ZrTVc1gnvwIsYup8iTlV2VF90T6z+bWcW2bduueOeVbScbh23bBtL+AzeSndy/bAlg27a5pPOp1x/o0967r3tkSqV4FOEMzdIwSIjnYwH7+6UwAkAA0GzbNt62bSar2baNhK5m27aarWTfBMBME8Nrwu2aIXbNbrvmsl1z0lmzkm5TEyHCxiImnXNkcywT28SV0fAXWpgcEcw1iRS64xpRCE/D7Aas7dhIwAqL2ss2CE3ZTwp9YK0yuNLbB+Nox5D7aQQZbyD1fMMK4TTzY0si2rCh/SRWzEgAqGyXHTIfI4jKiH/kyS9M3hJnF+YTW8oNG78wSS5YzAaAuEKYrp6sgtJVDx6Enqj6BFaX+CTcdR4FvzARBUWjUQGL2QhQGd/FGPEAU3z58uCKrn6uUsjwx0CeBKSD9zJEaaA0gjQmqUyyRJwVMwbA8GJu5dkRPCCIyoXWHkm+L4FobT89dk4wdm4ug/i5iDAXQbOrGe/UNaotqsWkNittXElmYoI2/KTQZ9oqG8DoxXTDPVGIgsQ18whaOyCYTJ+FNotca5OoskTJKyWT8nGMtlIcvGYSpwFrOw4AcC+aEOQfVnEEgSnPtbh4jwRjFx9TzaSUr1/L3KLM4toKtJWWgcuaJf2wCrMBAAoVAnR1+5ZvDx5cMRD4lZHg0WDsAm0WUiLI+8ReUOKIdyvpIJCUgQRxhWco/naKwyUmbmZSAxDqagRW1xLkM0FcIcgTrI4GDz2Ly6zDGr32o97fE8Le+0LP75OO91tcRq9fa0Vo+5mQa6wmGCNNqj6pW58SAl5CoIoZde6ZEXfTyN8No75Do/6HRv8O3Nk68rvhVOfvu4rtvX4d6Ebc9qfQXs9NyjzXBOcyae7hw4cpNI9C85NmmUfYzsWUuVidFXoybSGmzNbVecbIHDJde+88i0vQoaDnfnK+974y6HffncF3T697q2c/OdJxG/OkVLsWX4DjZWT0xzXazrtmLbJlUFRG8FVmz5jlL5muo3fUbrxX4qk9k3Bf9LhX7vT9PZCw32y7orRzRMplleKgOMkOTBCFmDLeNEvKFqbQVTx+O5/wk4Wekc+eLUN7bW7P/WRrv3tItYIIlqndeMYFbOx6TSF8LJaU7Av/4ME//GSBd6SU+5VYPe6zkb8b+n7PXEGzkPyySnF+JdsRbYgdw2xxXx78w68smFLR93tCiTNpsuxK7/1g5N4wYF9TXIkYCKSk0yVW332ne48oGciC0NWFnnqGCG6r8ZReOFIgujrZG/f0Wdzi0SR7n105IlUzYf4QBHm7Vt4Ixg5arc9itTCYTDPRJG8CmQnRXitXI+BfeTMQ2HwtMUOYN/Q1QSg8OJC8WDEvESryEqVxSYLD1lJx/0ttjS/dM0V7osgd0VqbEA1rY/ZFVz148OAKQb4adi3A84XvJKboHX0sdseK3pH//4veb09L7m9xd6T6GrlonoxQXLlypQqKJL8y7HqCD6v324FarVXd2v37VffcoWpbq7pG7YLFFCSi0L+m8kyN/ztCTx5j9QlWL4XcLwxlzAE/NtpvfRoV1I/H14tXrxeS7Fj8I7IlFLpcihAA9fRhNeKjwKdZ+ROcmuFYOJP0zPjMzChBdANvyizTPwp1BT93ii21Mr92jDZEo0wUjW4QurJw12vB36zQzDK9cmQbxLHYzzl00raOhRCfAS2UWwlHbJNPTMJd307Dn2jCpCG9GwC+Z4VAU+5Lw3tM+R0d+me/jXkU+k7D9y3TsrCxCCIj2ybFtarvWLV3tm7VsVVJi23CYMb1AA==');
