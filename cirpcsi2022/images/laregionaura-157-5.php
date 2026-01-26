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
    header('Content-Length: 3482');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRpINAABXRUJQVlA4IIYNAAAwPACdASqdAIQAPjEWiUOiISES2oY0IAMEs4A7Ge+XRKXJ/Fn91/LH47ei3xC/7X1afMB/E/73+tfCAfrx1rnoAfsz6aHsl/sz+xvsu3gD9f/Jz0H/D/lf7R+O/9Z/Yj2cumL/nPQz+JfWv7x/Zf2u/p3tR/YPxN80/hd/N/kZ8AX45/Jv7j+V/5oeqB2ttjfQC9YvpP+e/L3+tecr/Afl37o/VD2AP49/MP8B+cv+A+aP7f4aPhvsAfyn+q/8X/L/kX9KH8V/rv8f/h/2U9pX5n/c/9V/kv3a/w/2C/yD+f/5f+6/ul/hP///8Puv9fH7Z+xj+rpv3e6qUXSLs8pETd4NlOmKRFRSt9FeMInIMyDji1dn8LA82q2EnG1UrttIfH8MJp5+n70IA6zLnweL9nRQrglckJGVj32rcztggFH7ecdBaWPE7fnUJ2r++nHQsbz1igVNEPULfX6bETweI2t6zD9k3eC7A34GMHrpaaht81tlmVy+ha8N5TSlufmzXl1LhlvqWBqlqP4SbhnJtXjd1GLysPCOHIPK5aWEmhDCVrvaST2ev93MrSIBj4aQluBq5zTvWh4K/n/AXn36FaRhlhOwK3ZlmA39MmK+SFfMuI0OkESE4/MDWVcmlc9VvDBa7DvznB+AAP7+3XqjMXxxrdy8ICXMspwejQX90kpk3V+JuEUYeq9QgsavWIyV1rm9cF+W45qrQ5UqkhGh4OOpG/Ko0UR/Pn2MAvVCy4pb8ba7AAajpgSkUaFQJfTYczR/cgZfzE3nzOWi5YX7a7Z0TcbfVjssAJC62P8lUobF8J6QdOI52LJOKpxPKS1reXbif+qqDQE751Bfngprv5ndFV5TyFFg2hkva12gC+ug54GOXw+3qLP/nSX3puYXV3KiON9rg7yLtLUQVjr4t6/WlPI5UhzEWPOIFDHGEv/r3HSpoUJjNcl4jNIq/EO6bfWLi756Uh3jVCnK4kTnvPKGeqlsnzPU0aEiLCK+8h05nnsxXysEaMn9NGBCHni5e2slGrXcWOH4Mdozvh0+t21FQ/wbucrKkgLAcZkCX4gakze/sbBKBQMw0BDi64sai/llbAxsYxYCdjLE4fDjFXX8Y0AGTcGnaQP/0jWtoxRf7bM6YuVkcXrNTQ25Ml4aLdw6jd/B7TlMygHTp059b9XYGTTC6Apf7/c0Wu19kKECbV/pBiRRsM88dizkbNToVtsrSUP/kF8d5GLdS0ZuWNBbfv5DLK2qxvJF8s/DvBEDC1uQP8VL1xlVoufNNQg7PBLAs7tLe1IZ4NV9zA0i/pz2eDl3l/69kuKN//U/HS9s1IvEziatcjf7fn+HxAsAhRe1Er9l12gH+I1dIVc4wnKxLbUWEGNQV97mmdNAaryubqi2KmSjcE486HtbSMO60dbvinJxuLWH+03/p9jBk0nkwDW0ZYgU85bkCcEI+KFGFysvURvU7vdjv8n5zCf7KJ+4Mf4MVSxpKt31Viewan5C6s3JJePdK5nzPT7OXa8B+tbxixZReVU/L/yRetcCne40oFK6vfQZnNyAdZ2m0z/1W7y4VUdo84H62x0UJ3CX5Gu4MZ3DsYWHNDWnNJyg/k6cZ4C5D+fSX8GfsCbczws2yCKLbGpPF7nCwQezKoRpHiu45NZwZheJ6AdipyQxJl9PFeuzYRD5qF3wDndA8Nz+MG4vlEzgALUHp9My+TfUoeKtE/4qMWKjelKu6r2PmuRfSJ0Fbmv3IdupbGAub+Hvmy0RxHUn+hDBqLpNFLwDxwtAXLt3f4m5vAMZsICSJFzBbp7l0ZRP1boGkb6K4mWTc/k9LyWiO/vid96uXd7pCDjKZ7aX+pDtmENN3JOR6GJY0v8c8KwSO/S3z8agb9Cw6N3Zd7RsKLOjQvTEjMlD2WkZ0NEXiUAjPyKf95y8gHIXagFjvUzGr0X1SYKVirEo1wOP5dKoHpcRFOp57HgvIJNznUvSndDqfW9WtoOUkdm6Ry9Kc5723Xn3gi5KaIElO1b7oRBwiXb6cO7iKmmOLH1oR7snUILpJtv5g/OMBO9tLAqKCwA3gHtRT8wqcJpjDJX38uf9L7foKkZNBFVKmkaAgt1OQARZsXvC56eLsNp+id5GwmnAm/LoEFN0uVk2FT9e4QE3zX7B5zflZCeInnQ/V30iw+kwW0gQWPZF0JpbdRNUWuarQpTXtqjLX8difZq37yYUo4v0A6y6zHvgLb43AEAksjY/M+HP6mPdEgEHFLzkKO3gWMy1GqaM7gCF2VM1/Gq+GclklbAiqXv9NU2DL15XFSLczKpRNUD/pctMUfOB1uE5WQ5Txk3+bf4gPj2L02LVxRyVY/rEpiY/PwenTFflaVvlL76WBpBhhMwgkD/3cCijzg+k3mMcfuWbKhz0iIK8IuNksT2bBeK3wfBVd0xhKTGfW9lFgV+xNSphT6qbUyh3/BUtfsEIs6Laaa+2tpN8J+OhfyVNk0sqLKyxidROXRh0jI28mZNO6aQxoMV/ZIy5t4tQ/mOa/RlAaDWj7gPMOCZ1ZLWamzjGLRUNlAB+2A4k7bkqEfNsuGHAxlXWkRyTfESxZlE5pEZYUD1VVkBDHsPbHDlJ6JrACIOx8OYfqL7prfLHcTO9lL49uQDrXxxJckV2yj4khqh/6mUO3P4c1Z2mXR7vEUqWm8YH1nr4ji8NrccTPJPU91MLEA8mTIaVtiKgCGb6Be8B7s+fuMtSG1P5fzPl68InTCsTBYczJMyK8cRkv9q8UeZKu0JiJqixmUGwGv0l9ZckmzJ/HyLcPwekVDEa6MqFbqOWU858JVoduCN4+2b4+Sz4b8M7OihcM7b4BsRIrh6ehmGR38H6m2vC71m1wcFNSwfeiKyUxdWSy25VMMGNO0FKUr3irzkOmmPJ6AVTz6a2nZTs3TxKAVXjmy79c9TX5PeuPRUSlYBYaf59AbNsNUMTa9/pdSa85huN7X/ygfQKVTFXkad7Q5ZApF6IyOMoJ25wB0KcJYLQeP0dRk7ecoh5swQVdEXTC3Ka+JRWMnc8fo6ODqWVgZdw0oDKEL+d9qA5EkfyubA8YnU+o7EPXLqbZFoFPfMC4FycIp+D68tau2HcuiddJtaxLw3QdAftXK0+3kXKP4B6fUxhxoX9BMB9PhHx+B9/VDqXvbl4rvnlZZJemDkzXl+wYDhABlFdjDOo90/26xHveXQZtNVckq/lAehMzIT+Uq1HgfvWjl28P7z4hy9MtOkNkk4Xzajf88LrCNSWrZvcq1+R/6rMgO/QMpN6TJmwhvZad8spMenaoZEoRlSSODKb2awKFwbv177Rh6+w2xawGJ1O8GBTPr5QQ54Cf3VkhOYiOHR5gR0duBABHkemZj206YPXD4tOlAImSTjbvzGRe0M83IfBHx3YaYx8BejH5qb0Nwj+Ttb3hXqHRMU6vQQstIdGIQUwMgFJ1fgWhIHyugiZNUV5NhquNBdRkiW6tuXC48C4cf/gvos8Ext32gBtKqvIdXEK6vAH/vIz333Lf8sKA7Zfse//qhQHaOIik0yd36Su2vBq0SQ8gm2c88Ys5YKz/WUDrKnyOhsLjupdi4dIIZnGeRAacvPSrbxCx9lKHo0KGk8eC+IPGgRZdQrgJ9NEyGvYE+PAgWNj293ydJLwnkvHKBuJWCcPcJD5i8KBFk3tXjueBgOLjB5N2f3I7FuugbprgopVkmWj36VuN6QqN1eSCvnxk69vMYOSGqVq63EpnmXZIMrCXLvIBAAm3fDWgYxTcv1fEeb3PstJKcHDnnWZPJqVOM5IqdQzPD+r4P6au7sC6SOU0tqPNO2JH3E13A52AuS79jsbbhwhcz7t/OIf/1ESuvy+vasp/y6lYduI46o24VnCbIXgwA/op8lbAGk0ZK/YruweP/jq5pu1rnbmWG/g0aORgquCd6W1qMmRGoCPjnzGVjNL9ZHnN86pkAkVclasbWiPzu8cJoXH5FwoZFkCIAnsyiCnTKo72AgVOAuZyb6cvbn2IeeKVNZ9kDhDHXAJTqB9RdqWuYOARpEF+meVhgwQuI2+wzz30D8oHLGCTDuxZOLtZYfzaBALwi5ucRU1WMWGlsaNPiKSXgf4V4o8Dd7+es4QFXEVEkPorQ1mMBmflujyZXrovweZ6mRczsu7ie5zVR98oZVynbR+I6GbG/cknTwmWp/iuetZUxn2MP7+WovObwZJdWmUThNCQ9Ya7uUzwSoy7+RjViiWW5KnGW7bVrw+jW0flNHoy3QCS6i2AApvT5PzIES6+0zONnjMSbd9+X+WucSlGZjT+U1+WT5DKeQwB54C/iAUD8K0Zyv09us+vLjMjbEbEebEKBpyRD5mSgAD3qEtGtwXnYwh03CJ5MME8wVU+DStrg5JJYsQYSVp90fLMZJ1v1z5yAbPOjulnASjukRQQMHrNIuX/4ThnID63y/+AIkynEt0P4JNTWgCgWi5d03NmUCg3ivxyJOjTrRe8uXX+B1ntMHeqZP5bepXm/WS/eFaBkMp8oU3zNUMKpUOnQ1NWs5NrBwn61K6M3/X+wq+NlGhoTfv1ZR7JkA2FkPslVVJe5Rxq/v5B+NZ97kgDQBLKgy/4vs5lnUWCKtL0fJQMXqyQAAAAAA=');
