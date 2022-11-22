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

    <title>Data Display</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light"><i class="fa fa-user" style="margin-right: 5px;"></i>Add Teacher</a></button>
        <button class="btn btn-secondary" type="button" name="subcategory-user"><a href="subcategory-user.php" class="text-white"><i class="fa fa-users" style="margin-right: 5px;"></i>Add Student</a></button>
        <button class="btn btn-dark" type="button" name="subcategory-display"><a href="subcategory-display.php" class="text-white"><i class="fa fa-database" style="margin-right: 5px;"></i>Student Table Display</a></button>
        <button class="btn btn-danger btn-md px-3" type="submit" name="logout"><a href="session.php" class="text-white"><i class="fa fa-sign-out" style="margin-right: 5px;"></i>Log Out</a></button>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Languages</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Date</th>
                    <th scope="col">Caste</th>
                    <th scope="col">File</th>
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

                $sql = "select * from teacher";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id        = $row['id'];
                        $name      = $row['name'];
                        $gender    = $row['gender'];
                        $languages = $row['languages'];
                        $email     = $row['email'];
                        $mobile    = $row['mobile'];
                        $password  = $row['password'];
                        $date      = $row['date'];
                        $caste     = $row['caste'];
                        $file      = $row['file'];
                        echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $gender . '</td>
                            <td>' . $languages . '</td>
                            <td>' . $email . '</td>
                            <td>' . $mobile . '</td>
                            <td>' . $password . '</td>
                            <td>' . $date . '</td>
                            <td>' . $caste . '</td>
                            <td>' . $file . '</td>
                            <td>
                            <button class="btn btn-primary my-1"><a class="text-light" href="update.php?updateid=' . $id . '">Update</a></button>
                            <button class="btn btn-danger my-1 pl-3"><a class="text-light" href="delete.php?deleteid=' . $id . '">Delete</a></button>
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