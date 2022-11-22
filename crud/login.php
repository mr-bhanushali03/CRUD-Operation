<?php
include 'connect.php';
// session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'] ;
    $password = $_POST['password'];

    $sql = "SELECT * FROM teacher where email = '$email' && password = '$password'";
    $result = mysqli_query($con, $sql);

    while($newResult = mysqli_fetch_assoc($result))
    {
        $userRole = $newResult['role'];
    }
    $login = mysqli_num_rows($result);

    if ($login > 0) {
        session_start();
        $_SESSION["email"]  =  $email;
        if ($userRole == 1) {
            header('location:display.php');
        }
        if ($userRole == 2) {
            header('location:subcategory-display.php');
        }
    } else {
        echo '<h3 style="text-align:center; background: linear-gradient(to right, rgba(24, 218, 73, 1), rgba(30, 168, 160, 1)); margin: auto; padding: 5px 5px;">Please Enter valid Email OR Password</h3>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Log In/Sign Up</title>

    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(24, 220, 69, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 vh-100">
            <div class="row d-flex justify-content-center align-items-center vh-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form action="" method="post" autocomplete="off">

                                <div class="mb-md-4 mt-md-3 pb-4">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="login.php" onclick="msg()">Forgot password?</a></p>

                                    <button class="btn btn-outline-light btn-lg px-5" name="login">Login</button>

                                </div>

                                <div>
                                    <p class="mb-0">Don't have an account? <a href="user.php" class="text-white-50 fw-bold">Sign Up</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function msg() {
            alert("Please remember your password")
        }
    </script>

</body>

</html>