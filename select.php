<?php
include "connection.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dataBase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <table class="table table-dark table-responsive">
            <thead>
                <tr>
                    <th>student_id</th>
                    <th>student_code</th>
                    <th>full_name</th>
                    <th>email</th>
                    <th>password</th>
                    <th colspan="2">operation</th>
                </tr>
            </thead>
            <?php
            $sq = mysqli_query($con, 'SELECT * FROM students');
            while ($row = mysqli_fetch_array($sq)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $row[0] ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?></td>
                        <td>
                            <a class="btn btn-primary" href='update.php?id= <?php echo $row[0] ?>' role="button">edit</a>
                            <a class="btn btn-danger" href='delete.php ?id= <?php echo $row[0] ?>' role="button">delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>

        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>