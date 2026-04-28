<?php
include "db.php";
$result = $conn->query("SELECT * FROM projects");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects</title>
    <style>
        table{
            margin: auto;
            text-align: center;
        }
        td{
            padding: 20px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>

<body>

<h1>Projects</h1>

<table border="1" style="background: linear-gradient(skyblue,pink,lightgreen);">

<tr>
    <td>ID</td>
    <td>Project Name</td>
    <td>Description</td>
    <td>Status</td>
    <td>Start Date</td>
    <td>End Date</td>
</tr>

<?php while($row = $result->fetch_assoc()){ ?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["project_name"]; ?></td>
    <td><?php echo $row["project_description"]; ?></td>
    <td><?php echo $row["status"]; ?></td>
    <td><?php echo $row["start_date"]; ?></td>
    <td><?php echo $row["end_date"]; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>