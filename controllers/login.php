<?php
require_once('../database/db.php');
$response = array('success' => false);
$email = $_POST['email'];
$password = md5($_POST['password_1']);
$query = $connection->prepare("SELECT email, username, password, id FROM users WHERE (email=:email AND password=:password)");
$set = array(
    'email' => $email,
    'password' => $password
);
$query->execute($set);
$response['error_code'] = $query->errorCode();
$result = $query->fetch(PDO::FETCH_ASSOC);
$response['result'] = $result;
if (isset($result['id'])) {
    session_start();
    $_SESSION['id'] = $result['id'];
    $_SESSION['username'] = $result['username'];
    $_SESSION['access'] = true;
    $response['url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/index.php";
    $response['success'] = true;
}
echo json_encode($response);