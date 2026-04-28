<?php
session_start();
include "db.php";

?>
<h1>Dashboard</h1>
<h1>hello <?php echo $_SESSION["name"]?></h1>
<a href="logout.php">logout</a>