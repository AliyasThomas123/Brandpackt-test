<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_id = $_POST["task_id"];
    $task_name = $_POST["task_name"];
    $assigned_to = $_POST["assigned_to"];

    // Update task in the database
    $sql = "UPDATE tasks SET task_name = ?, assigned_to = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $task_name, $assigned_to, $task_id);
    $stmt->execute();
    $stmt->close();

    header("Location: dashboard.php");
    exit;
}

$task_id = $_GET["id"];
$sql = "SELECT * FROM tasks WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $task_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="" method="POST">
        <input type="hidden" name="task_id" value="<?php echo $row["id"]; ?>">
        Task Name: <input type="text" name="task_name" value="<?php echo $row["task_name"]; ?>"><br>
        Assigned To: <input type="text" name="assigned_to" value="<?php echo $row["assigned_to"]; ?>"><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
