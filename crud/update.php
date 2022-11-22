<?php
include 'connect.php';
session_start();
$login = $_SESSION["email"];

if ($login == true) {
} else {
    header('location:login.php');
}
$id         = $_GET['updateid'];
$sql        = "select * from teacher where id=$id";
$result     = mysqli_query($con, $sql);
$row        = mysqli_fetch_assoc($result);
$name       = $row['name'];
$gender     = $row['gender'];
$languages  = $row['languages'];
$languages = explode(",", $languages);
$email      = $row['email'];
$mobile     = $row['mobile'];
$password   = $row['password'];
$date       = $row['date'];
$caste      = $row['caste'];
$file       = $row['file'];

if (isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $gender   = $_POST['gender'];
    $languages = $_POST['languages'];
    $languages = implode(",", $languages);
    $email    = $_POST['email'];
    $mobile   = $_POST['mobile'];
    $password = $_POST['password'];
    $date     = $_POST['date'];
    $caste    = $_POST['caste'];
    $file     = $_POST['file'];

    $sql = "update teacher set id=$id, name='$name',gender='$gender',languages='$languages', email='$email', mobile=$mobile, password='$password',date='$date', caste='$caste', file='$file' where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo 'Updated Successfully';
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>teacher Operation</title>

    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f093fb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom left, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom left, rgba(145, 53, 156, 1), rgba(245, 87, 108, 1))
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold">Name</label>
                                            <input type="text" name="name" id="" class="form-control" placeholder="Enter Your Name" autocomplete="off" value=" <?php echo $name ?> " required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <h6 class="mb-2 pb-1 font-weight-bold">Gender:</h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" <?php if ($gender == "female") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" <?php if ($gender == "male") {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?> />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other" <?php if ($gender == "other") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <h6 class="mb-2 pb-1 font-weight-bold">Languages</h6>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="languages[]" id="inlineCheckbox1" value="English" <?php if (in_array('English', $languages)) {
                                                                                                                                                        echo "checked";
                                                                                                                                                    } ?> />
                                            <label class="form-check-label" for="inlineCheckbox1">English</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="languages[]" id="inlineCheckbox2" value="Hindi" <?php if (in_array('Hindi', $languages)) {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } ?> />
                                            <label class="form-check-label" for="inlineCheckbox2">Hindi</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="languages[]" id="inlineCheckbox3" value="Gujarati" <?php if (in_array('Gujarati', $languages)) {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        } ?> />
                                            <label class="form-check-label" for="inlineCheckbox3">Gujarati</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold">Email</label>
                                            <input type="email" name="email" id="" class="form-control" placeholder="Enter Your email" autocomplete="off" value="<?php echo $email ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold">Mobile</label>
                                            <input type="tel" name="mobile" id="" class="form-control" placeholder="Enter Your Mobile Number" autocomplete="off" value="<?php echo $mobile ?>" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold">Pasword</label>
                                            <input type="password" name="password" id="" class="form-control" placeholder="Enter Your Password" autocomplete="off" value="" required />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="" class="font-weight-bold">Date Of Birth</label>
                                            <input type="date" name="date" id="" class="form-control" placeholder="Enter Your DOB" autocomplete="off" value="<?php echo $date ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <label class="form-label select-label font-weight-bold">Choose Caste</label>
                                        <select class="select form-control" name="caste" style="width: 100%;">
                                            <option value="General" <?php if ($caste == 'General') {
                                                                        echo 'selected';
                                                                    } ?>>General</option>
                                            <option value="OBC" <?php if ($caste == 'OBC') {
                                                                    echo 'selected';
                                                                } ?>>OBC</option>
                                            <option value="ST" <?php if ($caste == 'ST') {
                                                                    echo 'selected';
                                                                } ?>>ST</option>
                                            <option value="SC" <?php if ($caste == 'SC') {
                                                                    echo 'selected';
                                                                } ?>>SC</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="row align-items-center ">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0 font-weight-bold">Upload CV</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input class="form-control form-control-lg" type="file" name="file" />
                                        <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                                            size 50 MB</div>

                                    </div>
                                </div>

                                <div class="form-check d-flex justify-content-start mb-4 pb-3 py-4">
                                    <input class="form-check-input me-3" type="checkbox" value="" id="" />
                                    <label class="form-check-label text-black" for="">
                                        I do accept the <a href="#!" class="text-black"><u>Terms and Conditions</u></a> of your
                                        site.
                                    </label>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" name="submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>