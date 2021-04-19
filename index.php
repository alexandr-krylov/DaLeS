<?php
  require_once 'src/session.php';
  echo phpinfo();
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
      <div class="menu-item pressed" id="home"><a href="index.html">home page</a></div>
      <div class="menu-item" id="about-us"><a href="aboutUs.html">about us</a></div>
      <div class="menu-item" id="medics"><a href="medics.html">medics</a></div>
      <div class="menu-item" id="catalogue"><a href="catalogue.html">catalogue</a></div>
      <div class="menu-item" id="appointment"><a href="appointment.html">appointment</a></div>
    </div>
    <div class="main-content">
      <div>
        <h2>What is podiatry?</h2>
        <p>
          Content about podiatry
        </p>
      </div>
      <div>
        <h2>Podiatry in Kazakhstan</h2>
        <p>
          Content about podiatry in Kazakhstan
        </p>
      </div>
    </div>
  </div>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
