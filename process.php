<?php
// makes it to PHP file
require "db.php";
// check data is empty or not
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");
// if data is empty then show error
if ($name == "") {

    echo "Name is required";
// if data is empty then show error
} elseif ($email == "") {

    echo "Email is required";
// if data is empty then show error
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "Invalid email address";
// if data is empty then show error
} else {
// to make it real database add the database to use it
    $stmt = $connection->prepare(
        "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)"
    );
// binds the parameters to the statement
    $stmt->bind_param("sss", $name, $email, $message);
// executes the statement
    $stmt->execute();
// shows success message
    echo "Contact saved successfully";
// close the statement
    $stmt->close();
// close the connection
    $connection->close();
}

?>