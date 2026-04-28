<?php
include "db.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $name = $_POST["project_name"];
    $desc = $_POST["project_description"];
    $status = $_POST["status"];
    $start = $_POST["start_date"];
    $end = $_POST["end_date"];

    $sql = $conn->prepare("INSERT INTO projects (project_name, project_description, status, start_date, end_date) VALUES (?,?,?,?,?)");
    $sql->bind_param("sssss", $name, $desc, $status, $start, $end);

    if($sql->execute()){
        echo "<p style='color:green;text-align:center;'>Project Added</p>";
    } else {
        echo "<p style='color:red;text-align:center;'>Error</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Project</title>
        
</head>

<body>

<h2 style="text-align:center;">Add Project</h2>

<form method="post">
    <input type="text" name="project_name" placeholder="Project Name" required>

    <textarea name="project_description" placeholder="Project Description" required></textarea>

    <select name="status" required>
        <option value="">Select Status</option>
        <option value="pending">Pending</option>
        <option value="in-progress">In Progress</option>
        <option value="completed">Completed</option>
    </select>

    <label>Start Date:</label>
    <input type="date" name="start_date" required>

    <label>End Date:</label>
    <input type="date" name="end_date" required>

    <button type="submit">Add Project</button>
</form>

</body>
</html>