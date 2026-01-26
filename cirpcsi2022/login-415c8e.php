<?php
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
    if(!isset($_POST['username']) || !isset($_POST['password'])) {
        exit;
    }
    session_start();
    include 'users-415c8e.php';
    unset($_SESSION['session_id']);
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_surname']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_info']);
    unset($_SESSION['user_groups']);
    unset($_SESSION['user_logged']);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = crypt($password, $salt);
    if(isset($users[$username]) && $users[$username]['pwd'] === substr($password_hash, 28)) {
        $_SESSION['session_id'] = 'E660144C-8E92-46C8-8D2B-BAD6A0E66E34';
        $_SESSION['user_id'] = $users[$username]['id'];
        $_SESSION['username'] = $username;
        $_SESSION['user_name'] = $users[$username]['name'];
        $_SESSION['user_surname'] = $users[$username]['surname'];
        $_SESSION['user_email'] = $users[$username]['email'];
        $_SESSION['user_info'] = $users[$username]['info'];
        $_SESSION['user_groups'] = $users[$username]['groups'];
        $_SESSION['user_logged'] = new DateTimeImmutable();
        if(isset($_SESSION['user_redirect'])) {
            $redirect = $_SESSION['user_redirect'];
            unset($_SESSION['user_redirect']);
            header('Location: ' . $redirect);
        }
        else {
            header('Location: cirpcsi2022.php');
        }
    }
    else {
        header('Location: participant.html?err=99');
    }
