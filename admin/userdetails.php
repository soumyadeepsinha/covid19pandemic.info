<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- Font Awesome 4.7 CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
  <!-- Remove Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="assets/style.css">
  <title>User Details</title>
</head>

<body>
  <div class="header">
    <h2 class="heading">List of People who Contact with us</h2>
    <a class="btn btn-sm btn-danger" href="logout.php">Logout</a>
  </div>
  <div class="main-div">
    <div class="center-div">
      <div class="table-reponsive">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nmae</th>
              <th>Email id</th>
              <th>Mobile No</th>
              <th>Address</th>
              <th>Symptoms</th>
              <th>Drescription</th>
              <th>Updated_at</th>
              <th colspan="2">Operation</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include_once '../dbconnection.php';

            $sql = "SELECT * FROM information;";
            $query = mysqli_query($con, $sql);
            $row = mysqli_num_rows($query);
            // creating an array
            while ($result = mysqli_fetch_array($query)) {
            ?>
              <tr>
                <td><?php echo $result['id']; ?></td>
                <td><?php echo $result['username']; ?></td>
                <td><span class="email-style"><?php echo $result['email']; ?></span></td>
                <td><?php echo $result['mobile']; ?></td>
                <td><?php echo $result['address']; ?></td>
                <td><?php echo $result['symptom']; ?></td>
                <td><?php echo $result['message']; ?></td>
                <td><?php echo $result['created_at']; ?></td>
                <td><button class="btn" data-toggle="tooltip" data-placement="top" title="Send Email" value="onclick"><i class="fa fa-envelope-o" aria-hidden="true"></i></button></td>
                <td><button class="btn" data-toggle="tooltip" data-placement="top" title="Send Message" value="onclick"><i class="fa fa-commenting-o" aria-hidden="true"></i></button></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    });
  </script>
</body>

</html>