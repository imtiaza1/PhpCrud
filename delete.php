<?php
include "connection.php";
if (isset($_GET['id']) == true) {
    $id = $_GET['id'];
    $delete = mysqli_query($con, "DELETE FROM `students` WHERE student_id=$id");
    if ($delete) {
        echo header('location:select.php');
    } else {
        echo  "<script>
        alert('not deleted')
        </script>";
    }
}
