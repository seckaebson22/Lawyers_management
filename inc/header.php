<?php 
    require_once 'register/Message.php';
    require_once 'register/Lawyer.php';

    $user = new Message();
    $lawyer = new Lawyer();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $user->sendMessage($name, $email, $subject, $message);

        $_SESSION['message'] = "Message sent successfully";
    }

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
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">

    <!-- scripts -->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script> 
    <script src="assets/js/count-up.js"></script>
    <script src="assets/slick/slick.js"></script>
   
