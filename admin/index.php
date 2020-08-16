<?php
require_once '../dbconnection.php';
session_start();

$php_errormsg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // declearing variable & value
  $myusername = mysqli_real_escape_string($con, $_POST['username']);
  $mypassword = mysqli_real_escape_string($con, $_POST['password']);
  // sql query for retrieving username & password from database
  $sql = "SELECT * FROM administrator WHERE username = '$myusername' and password = '$mypassword'";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $myusername;
    // redirect to user details page
    header('location: userdetails.php');
  } else {
    $php_errormsg = "Your Login Name or Password is invalid";
    header('location: index.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Remove Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <!-- Custom stylesheet -->
  <link rel="stylesheet" href="assets/style.css">
  <title>Admin | Login</title>
</head>

<body>
  <div class="main">
    <form action="" method="post">
      <p class="sign" align="center">Sign in</p>
      <form class="form1">
        <input class="un " type="text" placeholder="Username" name="username" autocomplete="off" required />
        <input class="pass" type="password" placeholder="Password" name="password" autocomplete="off" required />
        <input type="submit" class="btn submit" value="Submit" />
        <p class="forgot" align="center"><a href="#">Forgot Password?</p>
      </form>
      <div style="font-size:14px; color:red; margin-top:10px"><?php echo $php_errormsg; ?></div>
  </div>
</body>

</html>