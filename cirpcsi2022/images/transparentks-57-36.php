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
            $redirect = 'cirpcsi2022session1.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../participant.html');
            exit;
        }
    }
    $pageID = '8B63F4C2-8582-440F-AB5D-CF89DACED4DA';
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || !isset($access_control_groups[$pageID]) || !checkAccess($access_control_groups[$pageID])) {
        $redirect = 'cirpcsi2022session1.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../participant.html');
        exit;
    }
    unset($_SESSION['user_redirect']);

    header('Content-Type: image/png');
    header('Content-Length: 2436');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAADkAAAA5CAYAAACMGIOFAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAOaADAAQAAAABAAAAOQAAAAC3kYqgAAAI7klEQVRoBe1afWwT5xk/+86+O/v8Hcf5sJXEARMIEFIDStZmOFkYo2qiFm0tha1NW5Z062jRWKep+6NIbO0q1v6xTkxqmcoWiW503YqqCWkfIp20aWVCq1jXhbaqEqBxQr4/nY+zb7/HylmOsZ0PLokU5cTlvffee5/n+T3v8/W+hmHWr3UNrGtgXQMrrAF2JfgpiqLruva3xsbazeG2y59OrQTPZB5ccmc5nk+cOGF02Gw/cVqNhzf6PJuXg8eq0qysrHSbTKY/6HQ6BXfYZrM5VlUgrZl7vd7tPM//G3QVugGyy2q1OrXmsyr0yP88Hk8jx3E9KsBZkGGLxeJaFaG0ZFpeXm4EkO+yLEvBJb6CaqvX67vXBEiAaCT/U4Elt6sJUg9BNLvgg/8iMJoR1IiQpiD7+vrC8MVfaySbZmQ0BUlSIYKewWqOpZFQh3d0r/ilOcje3t5PsJoXUpEQOvhs6usV6S8aZG5urgcJ/l5KFZkklCTpNAKQrI7jmREEAyNJ6puFt6BVW1xcbF/4jDv8Mi8vb4vBYLgCc1QA9CRKtrRKovf47q/ApnCcXpFMvJLntvYEA4GchYpANARBeB68oqB1qaCgwLfQuUv+Dr62D/nvcxBQKxgFQrRu2LDBmo6oy2U/YJUExWU3KYUeq7Kx2N0TCgYXBJJoGo3GXyWnI7jANchQlY7XHb8js0TN+SQATqgAk1to+b38/PyiVEbV1dVisc/1od/nVDaX5ip3bfX2NITmBwlrKSaayTzUZ6zqoNlsPpTK6476zc3NBhA9ReapMkrXQssfQ8u7U5ntqix9eudWr1K1w6fUVpX2PNwQyrqSCEz3QJk3aQVTb5XvrKv8CLWxmMovUz/jVot8oLW19fTk5OR9WM1M8+PvZVneGJUnL/qL8ps/6wy/rX68wes719vf9QOOZfJ53shYMgQeshYEmEenpqZOwExfwfzrAEtkCGwsGo0quGPUp5d0QbE8mki8s9Q/MNGvwWzeh+aGk30D9G5bVRq3SrxS7HVMBytKjifzfOjenS8datihPHJ/sOd4c8NtK0kAEcR+jGrpmtPpXBafSxsdScjh4eG3pqenq5AyKmCyByHEa9DefwF6JhkEPfMGlhF4juFYvYFV5J9+5YvlP29qCgk05sl1nLGahQmbJOgtKUu5adMmCwD+JhaL1bhcrvqBgYF/0hytr4wgiRGtUHd3d8fY2NhvYUote/fuDcL3dkGw78Csfg+TuiHwyH8mnjEJRkbEs4HTA2zsKXlw7HfPHGn0/Ozsnz9x2KULVosgSEm1QElJSdH169cvgEd/JBIJdXV13dAanEovY0JXP8jUkpkVFRXZ9bHpCo5jQqLA7pEErsIi8Q6bxDMOq4gKR7xqdzkPijxnis1MXhSsOeVPP/dGL5J7VTgcPgd3kGElr8Knic28ssAv6buEX1In+YLih0+ePPlmS0vLHGubl3AykWzPBPr+fXu8BkNkl5lnayWRvQd+us1mE0fsTuejBiZ64PHDdcftW79fOz4+8jqAJY5CsJrZSC94jOggd7+DPNty9erVW+pEbair1JLaS5cucZcvni5FKVctinzQ4ykYffaFt6T2jzu/BR/MGNWTSCz5EfHjQ7vdfqSnp+d9IpLVJ5fMBRNra2vlyAzTOzIRuzk1FR2bnmHkyciMEyu+rABJ5nhKi0b9qvyarmRTU5Pw6f+ulFsl/R6byVDnsBqrXA6zKcfpfAqrV7H7rvIX9je9cnh8fPwU/GtZznzhl58hFT2OgPmeJiDJD0tLS339/f1VsVj0S1azocZh4QMuu8jmOM0MIlCX2+M6yBuFXjky8he7mLPjey+f68/PLzgwMTFRh/nMbDWlygNdxBJ5GOPqM40nBxwF89Q5MvzQiZTXjBdtCGqPtbe3d6iD1C7KdAhUWVmZNDg4uB1C1oJ4HUyjEoLZkSMZ0QhTiXJMFHLKUd0VPWv9+ouv/rH96CN7Xo9FZVtEHgNLnRIOM1QVJSojEmSpF3JtAVJRKyL1L4PB4LG2tjZiMueaFyQBQ0FQClBfgEPXo383TM0PYHMIUWTDP4aFhvWs4V2jw/7Ea2/+qfeJQ3VFA0NDD2LepBQzzJlzpx2Y5b7Ozs5fQK4zQ0NDL0KG5NVOkM8IkkosJOkHYOM1ALUNQkq4ExNTHzhOh0KAZQwG4bR/y93Hz549O0nf9PUNfDMmT1nlqHJLYWyp05bUhxxU6x6Dbx+jFu5Cp/QZaWUECZvnAe4bMzMz+Rlnzw6wMFVUPrIoiD/84KOOUx/MarQBu46B7huPRaMzjKLomYhuNBspHXYhAViIEQJT1o/vRNDGTQYlJmlYgdI5FBDPQradSBP3IU38JxvRecfgxMUwBYpScQbpWjIRiyQOFfs8B1MJ7truf2ZbIC++n9xS6unevbss2wm6DkI/gPr4FoHEPYV7Enck+YbyZcj0NrZa2v3kMFtEvwFGtwHV6wHQLHT4fO6aVIANDUFTic/1EZ0K5LktSr7b2l1WVpgNZJyEw+GoQRDpQOc2fpAhhmCHk5H0xy6pMiyqTz6Aovw5FOQygWUBDrsOxWkzX/b7CwPpiBV4ch62WQTFJBgUHt+KgqG7sHB+kEQL3wUA9DIeE0Cxgv3wv4fS8dL0XZ7b+aDLIfV7XJJSmOe4EAymP5gKhUKcYDT+PXn1IeSifgsJ4NALZvkO0aAtHva3OzUFk43YtrKi6i0B7/NH9++nnXnaCwLtJdPCYGIl0F8USCKMQpsXRfEoIr03LaPVekmmjQj4LvgnANIzQIaxF9UuWCwCYKI2WsScrJ+63e4gqqAvZ/1ohQc1BzkyMvJtynVpcNDKrsqlKcicnJxNWMWvZkJCQSTT2HK+1xTk6OhoCD6ZdJIzR/RVAUgSaAoSJ26tSNYvYcXmoFtzHYquSCFHUDjQlicRYQH8c5RtK/fr1EpoFv8DpA6ppFMFSiDxvLZAkiL9fn8Ayfwfs0BvrkmQBLS+vt6GrdE5rGQ/uoljSBpbU9f58+dZ7C6ehK+uXZBrasXWwaxrYF0D6xpYiAb+DyPSDUZHMjosAAAAAElFTkSuQmCC');
