<?php
if(!empty($_POST['full_name']) && !empty($_POST['email'] && !empty($_POST['password'] && !empty($_POST['confirm_password'])){
    if($_POST['password'] !== $_POST['confirm_password']){
        $_SESSION['error'] = 'Passwords do not match';
        header('Location: /register');
        exit();
    }
    $lastUserId = (new App\Users())->register($_POST['full_name'],$_POST['email'],$_POST['password']);
    if($lastUserId){
        unset($_SESSION['error']);
        header('Location: /todos');
        exit();
    }
    $_SESSION['error'] = 'Email already exists';
    header('Location: /register');
}