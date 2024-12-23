<?php
include("connection.php");
include("insert.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container bg-dark">
        <nav class="navbar" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand text-light">Navbar</a>
            </div>
        </nav>
    </div>

    <div class="container mt-3 bg-light">
        <form method="post" action="index.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Student Code</label>
                <input type="text" class="form-control" id="student_code" name="student_code" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email_address" name="email_address" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>
            <a class="btn btn-warning" href="select.php" role="button">View</a>
        </form>

        <!-- <script>
            let student_code = document.getElementById("student_code");
            let full_name = document.getElementById("full_name");
            let email_address = document.getElementById("email_address");
            let password = document.getElementById("password");
            let btn = document.getElementById("submit");
            let navbar = document.getElementById("navbar");
            btn.addEventListener("click", insertData);

            function insertData() {
                let xhr = new XMLHttpRequest();
                xhr.open('POST', 'insert.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        let response = parse(this.responseText);
                        navbar.innerText = response;
                    }
                }
                xhr.send("student_code=" + student_code.value + "&full_name=" + full_name.value + "&email_address=" + email_address.value + "&password=" + password.value);
            }
        </script> -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>