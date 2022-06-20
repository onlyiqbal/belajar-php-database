<?php
require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "iqbal";
$password = "rahasia";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->bindParam(1, $username);
$statement->bindParam(2, $password);
$statement->execute();

$succes = false;
$find_user = null;
foreach ($statement as $row) {
    $succes = true;
    $find_user = $row["username"];
}

if ($succes) {
    echo "Sukses login :" . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;
