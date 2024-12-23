<?php
include "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($con, "SELECT * FROM students WHERE student_id=$id");
    $row = mysqli_fetch_array($sql);
}
if (isset($_POST['btn_upd'])) {
    $studentCode = $_POST['student_code'];
    $fullName = $_POST['full_name'];
    $email = $_POST['email_address'];
    $password = $_POST['password'];

    $sql = mysqli_query($con, "UPDATE `students` SET `student_code`='$studentCode', `full_name`='$fullName', `email_address`='$email', `hashed_password`='$password' WHERE student_id='$id'");

    if ($sql) {
        echo '<script>alert("Data updated"); window.location.href = "select.php";</script>';
    } else {
        echo '<script>alert("Error: ' . mysqli_error($con) . '");</script>';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-3 bg-light">
        <form method="post">
            <div class="mb-3">
                <input type="text" class="form-control" id="student_code" name="student_code" aria-describedby="emailHelp" value="<?php echo $row[1];  ?>" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="emailHelp" value="<?php echo $row[2];  ?>" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email_address" name="email_address" aria-describedby="emailHelp" value="<?php echo $row[3];  ?>" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" value="<?php echo $row[4];  ?>" id="exampleInputPassword1" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btn_upd">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>