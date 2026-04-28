<?php
session_start();
include "db.php";

?>
<h1>hello <?php echo $_SESSION["name"]?></h1>
<h3>Today's Tasks</h3>
<ul>
    <li>Meeting with client</li>
    <li>Review project requirements</li>
    <li>Push code to Git</li>
    <li>Check emails</li>
    <li>Write documentation</li>
</ul>
<a href="logout.php">logout</a>