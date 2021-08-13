<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'covidinfo';

// Attempt to connect to MySQL database
$con = mysqli_connect($server, $user, $password, $db);

// Check connection
if ($con === false) {
  print "
  <script>
    alert ('Database connection failed');
  </script>";
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
