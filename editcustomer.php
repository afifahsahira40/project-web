<?php
session_start();
    include 'conn.php';
$idcustomer = $_GET['idcustomer'];
$sql = "SELECT username, address, phoneno, email FROM customer WHERE idcustomer = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idcustomer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username, $address, $phoneno, $email);
$stmt->fetch();
$stmt->close();
?>
<h1>New Customer</h1>

<form action="edit-simpancustomer.php" method="post">
    <input type="hidden" name="idcustomer" value="<?php echo $idcustomer; ?>">
    <table>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="username" value="<?php echo $username; ?>" readonly></td>
        </tr>
        <tr>
            <td>Adress</td>
            <td><input type="text" name="address" value="<?php echo $address; ?>"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phoneno" value="<?php echo $phoneno; ?>"></td>
        </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>