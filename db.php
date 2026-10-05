<?php

$connection = new mysqli("localhost", "root", "", "task1_db");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "";

?>