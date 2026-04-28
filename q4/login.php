<?php
session_start();
include "db.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $name = $_POST["name"];
    $pass = $_POST["password"];

    
    $sql = $conn->prepare("select id, password from userr where name=?");
    $sql->bind_param("s", $name);
    $sql->execute();
    $sql->bind_result($id, $hashed_password);
    $sql->fetch();

    if(password_verify($pass, $hashed_password)){
        $_SESSION["name"] = $name;

        $_SESSION["task_id"] = $id;

        header("Location: home.php");
        exit();
    } else {
        echo "Invalid login";
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container col-6 p-3 shadow border rounded">
    
    <div >
        <h3 class="text-center">login</h3>

        <form method="post">

            <div class="mb-3">
                <label class="form-label"> Task Id</label>
                <input type="number" name="id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            
            

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Login
            </button>

        </form>
    </div>

</div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
