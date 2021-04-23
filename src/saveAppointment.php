<?php
require 'session.php';
require 'dbConnect.php';
$conn = mysqli_connect($host, $username, $password, $dbname);
$sql = "SELECT id FROM user_login WHERE user_name = '{$_SESSION['login']}'";
$result = mysqli_query($conn, $sql);
$user_id = mysqli_fetch_assoc($result)['id'];
mysqli_free_result($result);
$sql = "INSERT appointment (
        user_id,
        client_name,
        client_surname,
        mobile_number,
        problem,
        convinient_time
    )
    VALUES (" .
        $user_id . ", " .
        "'" . $_POST['name'] . "', " .
        "'" . $_POST['surname'] . "', " .
        "'" . $_POST['mobile-number'] . "', " .
        "'" . $_POST['problem'] . "', " .
        "'" . $_POST['date'] . ' ' . $_POST['time'] .
    "')";
mysqli_query($conn, $sql);
header('Location: ../cabinet.php');