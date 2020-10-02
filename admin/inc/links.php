<?php

    session_start();

    require_once '../register/Message.php';
    require_once '../register/Admin.php';
    require_once '../register/Lawyer.php';

    $user = new Message();
    $admin = new Admin();
    $lawyer = new Lawyer();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">

    <!-- scripts -->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>