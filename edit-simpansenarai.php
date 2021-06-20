<?php
session_start();
include 'conn.php';

$idcatalog = $_POST['idcatalog'];
$catalogname = $_POST['catalogname'];

$sql = "UPDATE catalog SET catalogname = ? WHERE idcatalog = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('si', $catalogname, $idcatalog);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');