<?php
require_once 'src/session.php';
?>
<!doctype html>
<html>
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
      <div class="logo" id="logo"><img src="img/logo.png"></div>
      <div class="menu-item" id="home"><a href="index.html">home page</a></div>
      <div class="menu-item" id="about-us"><a href="aboutUs.html">about us</a></div>
      <div class="menu-item" id="medics"><a href="medics.html">medics</a></div>
      <div class="menu-item" id="catalogue"><a href="catalogue.html">catalogue</a></div>
      <div class="menu-item" id="appointment"><a href="appointment.php">appointment</a></div>
      <div class="menu-item pressed" id="cabinet"><a href="cabinet.php">cabinet</a></div>
    </div>
    <div class="main-content">
<?php
require_once 'src/content.php';
?>      
    </div>
  </div>
</body>

</html>
