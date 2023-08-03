<?php
function getDatabaseConnection() {
    $db_host = "your_database_host";
    $db_user = "your_database_username";
    $db_pass = "your_database_password";
    $db_name = "your_database_name";

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
