<?php
require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();
$connection->exec("INSERT INTO comments(email,comment) VALUES ('iqbal@test.com','hi')");
$connection->exec("INSERT INTO comments(email,comment) VALUES ('iqbal@test.com','hi')");
$connection->exec("INSERT INTO comments(email,comment) VALUES ('iqbal@test.com','hi')");
$connection->exec("INSERT INTO comments(email,comment) VALUES ('iqbal@test.com','hi')");
$connection->exec("INSERT INTO comments(email,comment) VALUES ('iqbal@test.com','hi')");


$connection->commit();

$connection = null;
