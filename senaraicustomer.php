<?php 
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang ="en">
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>ESS</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Bil</th>
        <th>ID Catalog</th>
        <th>Catalog Name</th>
        <th>Picture</th>
        <th>Price</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM customer ORDER BY idcustomer";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->idcustomer; ?></td>
            <td><?php echo $row->username; ?></td>
            <td><?php echo $row->address; ?></td>
            <td><?php echo $row->phoneno; ?></td>
            <td><?php echo $row->email; ?></td>
            <td>
                <a href="editcustomer.php?idcustomer=edit&idcustomerr=<?php echo $row->idcustomer; ?>">Edit</a>
                |
                <a href="deletecustomer.php?idcustomer=<?php echo $row->idcustomer; ?>">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<footer style="background-color: #d99393">
</footer>
  </body>
</html>