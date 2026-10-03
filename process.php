<?php

$name = $_POST["name"];
if ($name == "") {
    echo "Name is required";
} else {
    echo "Hello, " . $name;
}

$email = $_POST["email"];
$message = $_POST["message"];

echo "<br>";

echo "Email: " . $email;
echo "<br>";

echo "Message: " . $message;

?>