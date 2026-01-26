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
            $redirect = 'cirpcsi2022session1-2.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '778B88A4-F538-45F1-ACEC-5507EB242323';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session1-2.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/jpeg');
    header('Content-Length: 1215');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAMDAwMDAwMDAwMEBAQEBAYFBQUFBgkGBwYHBgkOCAoICAoIDgwPDAsMDwwWEQ8PERYZFRQVGR4bGx4mJCYyMkMBAwMDAwMDAwMDAwQEBAQEBgUFBQUGCQYHBgcGCQ4ICggICggODA8MCwwPDBYRDw8RFhkVFBUZHhsbHiYkJjIyQ//AABEIABUAOgMBIgACEQEDEQH/xACDAAABBQEBAAAAAAAAAAAAAAAABAUGBwgCCRAAAQQBAwMDAgMJAAAAAAAAAQIDBAUGAAcREiExCBNBMmEUFSIXGCMkM1GBsdIBAAICAwAAAAAAAAAAAAAAAAIFAwQAAQYRAAICAQMDBQEAAAAAAAAAAAECAwQRAAUSITFREyIyQXGR/9oADAMBAAIRAxEAPwD0lyzNI+PqXFZXGS9HaEqUqWVoZZjD6nCpIJJ/sEgn7ahlRuqw+84lF3U3LLK1SJZitvsvR43KU8pS6hIX0lxPPB57+NJNzKOXaxs0pmW+uddVjaKeVOUGozUkBY9kOD6UkHuPnvqrsJxKVQ5NYXk/FJFfWNY6mpYiynwqRZWqekqkIjIJBQSjgLBPI4PxqNmYOqgZB7nTStVpy0LdiacrPHn005KAe2Mg9TnP1qwN4t5rnFX8PxPbumaucry7lde3I5DTLA7e64OU88n4JAABJ1D0VnrMcKHF5FgrIUQVN+zz0/bn2z/vUQ3IkjbXefY7P8pVJ/Ik0btVJmPpK/wryw59fTzx0h0ffgHWoEbz7TLCVJ3GxohQBH8+yD3+xOg+TPykK4OAAcdNPeL0du2p6GzV7gs12lmnlgNg+pzZSg+l4gDpqmtzNz90lblUu0O17FOzcu0ybKdPsx1NjsSUtjwAAOT2JJOuqqr9XqLStVb5LhTlemWyZaGmeHFMBY9wI/hj9RTzxpbvThuzOVX9VZ5TuCjEcmiQ0/h5sSxbhSVxVklHUHPKeeelQ4+dZo3CFLthTxMs2z9Rl1f3sewYQ3WOWaZ6ZCFn9QUhs8dI+eoEHxoHJVmLMSAc9Gx0/NMdtgrXKlCrTqVop5YgjGzQebnKSfd6oyAp+vGtY51uLlNFvttVgddKjopchhynZ7S2UrcWpoOFPSs90/SPGr41j7O5Mib6kvTnMls+zIkUMh15rx0LcacUpP8AgnjWwdTISTJ17N0/g1zO714oK2xmONEaTby0hUD3MJnXJx3OBrmdXQLNpLFhEZktJWFhDqQsBSfB4Om6DiePVrqZEWtZS6h5TyHFjrWhShxwkq8AfAHYaNGpNI9K73H6PJ61+oyGpiWcF7+pHlNJdQSPB4V4I+CO+qn/AHbdjurq/Z1Wc889lvf96NGhKq3yUH9Grde/eqKUq3bECk5KxSMgJ8kKRqR5Rs3tjmtgza5TiEKzmMxW4iHnlOBSWWuSlH6FAcDk6bajYLZyisItrV7f1LMuM4HGXFpW90LT3Cgl1ShyPg8dtGjWcEzngufONGu57kkQgXcLSxBeIjErhceMZxjU2scKxa2yOmy6xpmJF3TNrbgTVFQXHS5yFBIBA79R8jTzo0a3gDOB31UeWSQRrJIzCNeKBiSFXOcDPYZOv//Z');
