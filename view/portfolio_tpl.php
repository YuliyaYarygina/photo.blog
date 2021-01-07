<?php
session_start();
require_once('../database/db.php');
require_once('../config/config.php');
?>

<!doctype html>
<html lang="ua">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Yulia Yarygina">
    <title> <?= $config['title'] ?> </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <!-- Custom font styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/carousel.css">

    <!--    <link rel="icon" href="img/favicon/icons8-camera-addon-64.png">-->
</head>

<body>

<? include ('../view/header_tpl.php'); ?>
<!---->

<? include ('../view/carousel_tpl.php'); ?>


<? include ('../view/footer_tpl.php') ?>


</body>
</html>

<script type="application/javascript" src="../js/library/jquery.js"></script>

<!-- JavaScript Bundle with Popper.js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>

<script type="application/javascript" src="../js/script.js"></script>
<script type="application/javascript" src="../js/login.js"></script>
<script type="application/javascript" src="../js/registration.js"></script>
