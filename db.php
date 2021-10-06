<?php

require_once './config/connect.php';
$givenName = $_POST['givenName'];
$familyName = $_POST['familyName'];
$patronymic = $_POST['patronymic'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];

$connect = mysqli_connect(hostname:'localhost', username: 'root', password: '', database: 'consulting');

mysqli_query($connect, query: "INSERT INTO `post` (`id`, `givenName`, `familyName`, `patronymic`, `phone`, `city`, `birthday`, `email`)
 VALUES ('Null', '$givenName', '$familyName', '$patronymic', '$phone', '$city', '$birthday', '$email')");

header('Location: ./login.html');






