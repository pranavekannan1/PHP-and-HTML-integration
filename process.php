<?php

$name = $_POST["name"];
if ($name == "") {
    echo "Name is required";
} else {
    echo "Hello, " . $name;
}

echo "<br>";
$email = $_POST["email"];
if ($email == "") {
    echo "Email is required";
} else {
    echo "Email: " . $email;
}
echo "<br>";

$message = $_POST["message"];
if ($message == "") {
    echo "Message is required";
} else {
    echo "Message: " . $message;
}           
?>