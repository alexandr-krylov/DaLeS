<?php
require 'dbConnect.php';
$conn = mysqli_connect($host, $username, $password, $dbname);
$sql = "SELECT password_hash FROM user_login WHERE user_name = '{$_POST['login']}'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows < 1) {
    $error = 'wrong login';
    return;
}
$password_hash = mysqli_fetch_assoc($result)['password_hash'];
if (password_verify($_POST['password'], $password_hash)) {
    require 'session.php';
    $_SESSION['login'] = $_POST['login'];
} else {
    $error = 'wrong password';
}
header('Location: ../cabinet.php');