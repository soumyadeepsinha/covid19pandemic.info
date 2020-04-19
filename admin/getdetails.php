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
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>Details</title>
</head>

<body>
  <div class="main-div">
    <h1>List of People who Contacted with us</h1>
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
              <th colspan="2">Operation</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include_once '../dbconnection.php';

            $sql = "SELECT * FROM info;";
            $query = mysqli_query($con, $sql);
            $row = mysqli_num_rows($query);

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
                <td><i class="fa fa-edit" aria-hidden="true"></i></td>
                <td><i class="fa fa-trash" aria-hidden="true"></i></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>