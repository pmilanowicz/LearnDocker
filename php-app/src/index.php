<?php

$conn = mysqli_connect("mysql_database", "user", "test", "application", "3306");

//$query = "INSERT INTO users(uuid, name) VALUES('123e4567-e89b-12d3-a456-426655440000', 'Paweł Milanowicz')";
$query = "SELECT * FROM users;";

/** @var mysqli_result $result */
$result = mysqli_query($conn, $query);

var_dump($result->fetch_all());

mysqli_close($conn);

echo phpinfo();

