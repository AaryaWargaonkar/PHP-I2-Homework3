<!DOCTYPE html>
<html>
<body>

<form method="post">
    Id:
    <input type="text" name="id"><br><br>
    <button type="submit">submit</button>
</form>

</body>
</html>

<?php
include "db.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $id = $_POST["id"];

    $sql = $conn->prepare("DELETE FROM projects WHERE id=?");
    $sql->bind_param("i", $id);

    if($sql->execute()){
        echo "data deleted";
    } else {
        echo "data not deleted";
    }
}
?>