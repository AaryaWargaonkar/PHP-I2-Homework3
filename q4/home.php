<?php
session_start();


?>

<h1>Welcome <?php echo $_SESSION["name"]; ?></h1>

<h3>Active Task</h3>
<p>Task ID: <?php echo $_SESSION["task_id"]; ?></p>

<h3>Today's Tasks</h3>
<ul>
    <li>Meeting with client</li>
    <li>Review project requirements</li>
    <li>Push code to Git</li>
    <li>Check emails</li>
    <li>Write documentation</li>
</ul>

<a href="logout.php">Logout</a>