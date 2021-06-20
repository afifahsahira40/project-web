<!DOCTYPE html>
<html lang ="en">
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>ESS</title>
        
        <style>

 body {

 margin: 0;

 font-family: Arial, Helvetica, sans-serif;

 }



.topnav {

 overflow: hidden;

 background-color: #333;

 }



.topnav a {

 float: left;

 color: #f2f2f2;

 text-align: center;

 padding: 14px 16px;

 text-decoration: none;

 font-size: 17px;

 }



.topnav a:hover {

 background-color: #ddd;

 color: black;

 }



.topnav a.active {

 background-color: #d99393;

 color: white;

 }

 </style>

  </head>
  <body>

 <center>

 <div class="topnav">

 <a href="index.php">Catalog Details</a>

 <a class="active" href="update.php">Update Product</a>

 <a href="customerdetails.php">Customer Details</a>

 <a href="">Logout</a>

 </div>
          
          

     <h3>Name System : E-Shopping System (ESS)</h3><br>

 <br>Nama Programmer :<a href="admin/">Admin(Afifah)</a>
       
        </center>
<h1>Update Product</h1>

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
    include 'conn.php';
    $bil = 1;
    $pdo = Database::connect();
    $sql = "SELECT * FROM catalog where idcatalog";
    foreach ($pdo->query($sql) as $row) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->idcatalog; ?></td>
            <td><?php echo $row->catalogname; ?></td>
            <td><?php echo $row->picture; ?></td>
            <td><?php echo $row->price; ?></td>
            <td>
                <a href="update.php?menu=edit&idcatalogr=<?php echo $row->idcatalog; ?>">Update</a>
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