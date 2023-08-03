<?php
// Similar database connection setup

$task_id = $_GET["id"];
$sql = "DELETE FROM tasks WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $task_id);
$stmt->execute();
$stmt->close();

header("Location: dashboard.php");
exit;
?>
