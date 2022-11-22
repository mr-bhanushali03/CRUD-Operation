<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>SubCategory Display</title>
</head>

<body>
    <div class="container">
        <!-- <button class="btn btn-primary my-5"><a href="display.php" class="text-light"><i class="fa fa-undo" style="margin-right: 5px;"></i>Back</a></button> -->
        <button class="btn btn-primary my-5" type="button" name="subcategory-user"><a href="subcategory-user.php" class="text-white"><i class="fa fa-users" style="margin-right: 5px;"></i>Add Student</a></button>
        <!-- <button class="btn btn-dark" type="button" name="subcategory-display"><a href="display.php" class="text-white"><i class="fa fa-database" style="margin-right: 5px;"></i>Main-Data Display</a></button> -->
        <button class="btn btn-danger btn-md px-3" type="submit" name="logout"><a href="session.php" class="text-white"><i class="fa fa-sign-out" style="margin-right: 5px;"></i>Log Out</a></button>
        <table class="table table-white table-hover">
            <thead>
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Position</th>
                    <th scope="col">Password</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $login = $_SESSION["email"];

                if ($login == true) {
                } else {
                    header('location:login.php');
                }

                $sql = "select * from student";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id        = $row['id'];
                        $name      = $row['name'];
                        $email     = $row['email'];
                        $position  = $row['position'];
                        $password  = $row['password'];
                        $gender    = $row['gender'];
                        echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $position . '</td>
                            <td>' . $password . '</td>
                            <td>' . $gender . '</td>
                            <td>
                            <button class="btn btn-primary my-1"><a class="text-light" href="subcategory-update.php?updateid=' . $id . '">Update</a></button>
                            <button class="btn btn-danger my-1 pl-3"><a class="text-light" href="subcategory-delete.php?deleteid=' . $id . '">Delete</a></button>
                            </td>
                        </tr>';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>
</body>

</html>