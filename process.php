<?php

// Load the database connection
require "db.php";

// Get form data and remove extra spaces
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

// Check if the name is empty
if ($name == "") {

    echo "Name is required";

// Check if the email is empty
} elseif ($email == "") {

    echo "Email is required";

// Check if the email format is valid
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "Invalid email address";

} else {

    // Prepare the SQL statement
    $stmt = $connection->prepare(
        "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)"
    );

    // Check if the SQL statement was prepared successfully
    if (!$stmt) {

        echo "Failed to prepare database statement";

    } else {

        // Bind the form values to the SQL statement
        $stmt->bind_param("sss", $name, $email, $message);

        // Execute the SQL statement
        if ($stmt->execute()) {

            echo "Contact saved successfully";

        } else {

            echo "Failed to save contact";

        }

        // Close the prepared statement
        $stmt->close();
    }

    // Close the database connection
    $connection->close();
}

?>