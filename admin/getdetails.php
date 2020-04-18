<?php
include_once '../dbconnection.php';

$sql = "SELECT * FROM info;";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <th class="text-left" colspan="6">User Details From Database</th>
    </tr>
    <tr class="text-capitalize text-white">
      <th style="color: #fff; background: #2196f3;"> User Name </th>
      <th style="color: #fff; background: #ffc107;"> Email </th>
      <th style="color: #fff; background: #008c76ff;"> Mobile </th>
      <th style="color: #fff; background: #c91e7f;"> Address </th>
      <th style="color: #fff; background: #4caf50;"> Symptoms </th>
      <th style="color: #fff; background: #332737ff;"> Drescription </th>
    </tr>
    <tr class="mb-5">
      <td> <?php echo $row['username'] . "<br/>"; ?> </td>
      <td> <?php echo $row['email'] . "<br/>"; ?> </td>
      <td> <?php echo $row['mobile'] . "<br/>"; ?> </td>
      <td> <?php echo $row['address'] . "<br/>"; ?> </td>
      <td> <?php echo $row['symptom'] . "<br/>"; ?> </td>
      <td> <?php echo $row['message'] . "<br/>"; ?> </td>
    </tr>
<?php
  }
}
?>