<?php
require 'conn.php';

$idcatalog = $_GET['idcatalog'];
$sql = "DELETE FROM catalog WHERE idcatalog = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idcatalog);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');