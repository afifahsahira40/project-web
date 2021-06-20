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
        <th>Action</th>
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM catalog ORDER BY idcatalog";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->idcatalog; ?></td>
            <td><?php echo $row->catalogname; ?></td>
            <td><img src="<?php echo $row->picture; ?>" height="50" width="50" ></td>
            <td><?php echo $row->price; ?></td>
            <td>
                <a href="editsenarai.php?idcatalog=edit&idcatalogr=<?php echo $row->idcatalog; ?>">Edit</a>
                |
                <a href="deletecatalog.php?idcatalog=<?php echo $row->idcatalog; ?>">Delete</a>
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