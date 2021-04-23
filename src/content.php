<?php

if (!key_exists('login', $_SESSION)) {
    require 'src/loginForm.php';
} else {
    require 'sayHello.php';
    require 'checkRole.php';
    if ($role == 'admin') {
        require 'allAppointments.php';
    }
    if ($role == 'user') {
        require 'myAppointments.php';
    }
}