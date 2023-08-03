<?php
require_once "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $conn = getDatabaseConnection();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$user_id = 1; 
$sql = "SELECT * FROM tasks WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Display tasks
echo "<h1>Dashboard</h1>";
echo "<table>";
echo "<tr><th>Task</th><th>Assigned To</th><th>Action</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["task_name"] . "</td>";
    echo "<td>" . $row["assigned_to"] . "</td>";
    echo "<td><a href='edit_task.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete_task.php?id=" . $row["id"] . "'>Delete</a></td>";
    echo "</tr>";
}

echo "</table>";

$stmt->close();
$conn->close();
}
?>
