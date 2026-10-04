<?php

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);

if ($name == "") {

    echo "Name is required";

} elseif ($email == "") {

    echo "Email is required";

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "Invalid email address";

} else {

    echo "Name: " . $name;
    echo "<br>";
    echo "Email: " . $email;
    echo "<br>";
    echo "Message: " . $message;

}

?>