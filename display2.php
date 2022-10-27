<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Regisration List | <a href="index.php">HOME>></a></h2>

<table>
  <tr>
    <th>S.No.</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Dob</th>
    <th>Email</th>
    <th>Mob</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Nationality</th>
    <th>State</th>
    <th>City</th>
    <th>District</th>
    <th>Pin Code</th>
    <th>Father</th>
    <th>Mother</th>
    <th>Father Occupation</th>
  </tr>
  <?php

include 'connection.php';

$selectquery = "select * from registration";

$query = mysqli_query($con,$selectquery);

$nums = mysqli_num_rows($query);


while($res = mysqli_fetch_array($query)){
?>

  <tr>
    <td><?php echo $res['S_no']; ?></td>
    <td><?php echo $res['First_name']; ?></td>
    <td><?php echo $res['Last_name']; ?></td>
    <td><?php echo $res['Dob']; ?></td>
    <td><?php echo $res['Email']; ?></td>
    <td><?php echo $res['Mob_no']; ?></td>
    <td><?php echo $res['Gender']; ?></td>
    <td><?php echo $res['Address']; ?></td>
    <td><?php echo $res['Nationality']; ?></td>
    <td><?php echo $res['State']; ?></td>
    <td><?php echo $res['City']; ?></td>
    <td><?php echo $res['District']; ?></td>
    <td><?php echo $res['Pincode']; ?></td>
    <td><?php echo $res['Father_name']; ?></td>
    <td><?php echo $res['Mother_name']; ?></td>
    <td><?php echo $res['Father_occupation']; ?></td>
  </tr>
  <?php
}
  ?>
</table>

</body>
</html>