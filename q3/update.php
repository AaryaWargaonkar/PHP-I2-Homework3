<!DOCTYPE html>
<html>
<body>

<form method="post">
    Id:
    <input type="text" name="id"><br><br>

    Project Name:
    <input type="text" name="project_name"><br><br>

    Description:
    <input type="text" name="project_description"><br><br>

    Status:
    <input type="text" name="status"><br><br>

    Start Date:
    <input type="date" name="start_date"><br><br>

    End Date:
    <input type="date" name="end_date"><br><br>

    <button type="submit">submit</button>
</form>

</body>
</html>

<?php
include "db.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $id = $_POST["id"];
    $name = $_POST["project_name"];
    $desc = $_POST["project_description"];
    $status = $_POST["status"];
    $start = $_POST["start_date"];
    $end = $_POST["end_date"];

    $sql = $conn->prepare("UPDATE projects SET project_name=?, project_description=?, status=?, start_date=?, end_date=? WHERE id=?");
    $sql->bind_param("sssssi", $name, $desc, $status, $start, $end, $id);

    if($sql->execute()){
        echo "data updated";
    } else {
        echo "data not updated";
    }
}
?>