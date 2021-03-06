<?php
require 'src/session.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="podocenter">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="content">
    <div class="left-bar">
      <div class="logo" id="logo"><img src="img/logo.png" alt="logotype"></div>
      <div class="menu-item" id="home"><a href="index.html">home page</a></div>
      <div class="menu-item" id="about-us"><a href="aboutUs.html">about us</a></div>
      <div class="menu-item" id="medics"><a href="medics.html">medics</a></div>
      <div class="menu-item" id="catalogue"><a href="catalogue.html">catalogue</a></div>
      <div class="menu-item pressed" id="appointment"><a href="appointment.php">appointment</a></div>
      <div class="menu-item" id="cabinet"><a href="cabinet.php">cabinet</a></div>
    </div>
    <div class="main-content">
<?php
if (!key_exists('login', $_SESSION)) {
    echo "To create appointment you must be logged in!!! ";
?>
<a href="cabinet.php">login on cabinet</a>
<?php
} else {
    require 'src/sayHello.php';
?>      
      <h2>Make an appointment</h2>
      <form action="src/saveAppointment.php" method="post">
        <div><label>name<input type="text" name="name"></label></div>
        <div><label>surname<input type="text" name="surname"></label></div>
        <div>
          <label>mobile number<input type="tel" name="mobile-number"></label>
        </div>
        <div>
          <label>
            <span>describe your<br> problem</span>
            <textarea name="problem"></textarea>
          </label>
        </div>
        <div><label>date and time<input type="date" name="date"><input type="time" name="time"></label></div>
        <div><input type="submit" value="submit" class="submit"></div>
      </form>
    </div>
  </div>
<?php
}
?>
</body>

</html>
