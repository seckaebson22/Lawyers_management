<?php

require_once 'inc/links.php';

if(isset($_SESSION['username'])){
    header("location: dashboard.php");
}

if(isset($_POST['login_admin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin->loginAdmin($username, $password);
}