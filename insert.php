<?php
include "connection.php";
if (isset($_POST['submit'])) {
    $studentCode = $_POST['student_code'];
    $fullName = $_POST['full_name'];
    $email = $_POST['email_address'];
    $password = $_POST['password'];
    $sql = "INSERT INTO students (student_code, full_name, email_address, hashed_password)
            VALUES ('$studentCode', '$fullName', '$email', '$password')";

    if ($con->query($sql) == true) {
        echo '<div class="container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data successfully inserted!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>';
    } else {
        echo '<div class="container">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data not inserted!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>';
    }
    $con->close();
}
