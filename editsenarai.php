<?php
session_start();
    include 'conn.php';
$idcustomer = $_GET['idcatalog'];
$sql = "SELECT catalogname, price FROM catalog WHERE idcatalog = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idcatalog);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($catalogname, $price);
$stmt->fetch();
$stmt->close();
?>
<h1>New Catalog</h1>

<form action="edit-simpansenarai.php" method="post">
    <input type="hidden" name="idcatalog" value="<?php echo $idcatalog; ?>">
    <table>
        <tr>
            <td>Catalog Name</td>
            <td><input type="text" name="catalogname" value="<?php echo $catalogname; ?>" readonly></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" value="<?php echo $price; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>