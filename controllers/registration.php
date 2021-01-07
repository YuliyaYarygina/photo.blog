<?php
require_once ('../database/db.php');
$response = array('success' => false);
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password_1']);
$nameErr = $emailErr = "";
//check email

if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
    $nameErr = "Разрешены только буквы и пробелы";
    echo $nameErr;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    echo $emailErr;
}

$query = $connection->prepare("INSERT INTO users SET username=:username, email=:email, password=:password, date=:date");

$set = array(
    'username' => $username,
    'email' => $email,
    'password' => $password,
    'date' => time()
);

$response['success'] = $query->execute($set);
$response['url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/index.php";
$response['error_code'] = $query->errorCode();

echo json_encode($response);