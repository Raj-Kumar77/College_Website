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

<h2>Enquery Table | <a href="index.php">HOME>></a></h2>

<table>
  <tr>
    <th>S.No.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
  </tr>
  <?php

include 'connection.php';

$selectquery = "select * from message";

$query = mysqli_query($con,$selectquery);

$nums = mysqli_num_rows($query);


while($res = mysqli_fetch_array($query)){
?>

  <tr>
    <td><?php echo $res['S.NO.']; ?></td>
    <td><?php echo $res['NAME']; ?></td>
    <td><?php echo $res['EMAIL']; ?></td>
    <td><?php echo $res['SUBJECT']; ?></td>
    <td><?php echo $res['MESSAGE']; ?></td>
  </tr>
  <?php
}
  ?>
</table>

</body>
</html>