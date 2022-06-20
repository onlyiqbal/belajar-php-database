<?php
require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = $connection->quote("admin; #");
$password = $connection->quote("admin");

$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";
$statement = $connection->query($sql);

$succes = false;
$find_user = null;
foreach ($statement as $row) {
    $succes = true;
    $find_user = $row["username"];
}

if ($succes) {
    echo "Sukses login :" . $find_user . PHP_EOL;
} else {
    echo "gagal login" . PHP_EOL;
}

$connection = null;
