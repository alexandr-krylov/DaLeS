<?php
require 'dbConnect.php';
$conn = mysqli_connect($host, $username, $password, $dbname);
$sql = "SELECT roles.role_name FROM user_login " .
    "JOIN roles ON user_login.user_role = roles.id " .
    "WHERE user_name = '{$_SESSION['login']}'";
$role = mysqli_fetch_assoc(mysqli_query($conn, $sql))['role_name'];