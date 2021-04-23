<?php
require 'dbConnect.php';
$conn = mysqli_connect($host, $username, $password, $dbname);
$sql = "SELECT client_name, client_surname, mobile_number, problem, convinient_time, appointment.update_at " .
    "FROM appointment JOIN user_login ON appointment.user_id = user_login.id " .
    "WHERE user_name = '{$_SESSION['login']}'";
$result = mysqli_query($conn, $sql);
?>
<table cellpadding="4">
    <tr>
        <th>name</th>
        <th>surname</th>
        <th>mobile</th>
        <th>problem</th>
        <th>time</th>
        <th>updated</th>
    </tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?php echo $row["client_name"]; ?></td>
        <td><?php echo $row["client_surname"]; ?></td>
        <td><?php echo $row["mobile_number"]; ?></td>
        <td><?php echo $row["problem"]; ?></td>
        <td><?php echo $row["convinient_time"]; ?></td>
        <td><?php echo $row["update_at"]; ?></td>
    </tr>
<?php
}
?>
</table>