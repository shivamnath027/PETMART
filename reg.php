<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "petmart";
$con = mysqli_connect($host, $user, $password, $db);
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $query = "INSERT INTO login(fname,lname,gender,email,mobile,address,dob,password) VALUES('$fname', '$lname','$gender', '$email', '$mobile', '$address','$dob', '$password');";
    $data = mysqli_query($con, $query);
    //INVOKES THE TRIGGER AND INSERTS THE USER 'email' AND 'date&time' OF REGISTRATION INTO THE TABLE 'login_log' IF A NEW USER IS REGISTERED
    if ($data) {
        echo "<script> alert('Registration Successful'); window.location.assign('log.php'); </script>";
        exit();
    } else {
        echo ("Error description: " . mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="pic/favicon.ico" type="image/ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION PAGE</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(pic/cat.svg);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        .reg {
            margin-top: 50px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 270px;
        }

        .card-action {
            background-color: #fff;
            border-bottom: 1px solid #eee;
            text-align: center;
        }

        .card-content {
            padding: 20px;
        }

        label {
            font-weight: bold;
        }

        .btn-register {
            background-color: #4caf50;
            color: #fff;
            width: 100%;
        }

        .gender-options {
            text-align: center;
        }

        .container {
            font-size: 70%;
        }

        /* .form-control {} */

        /* .custom-input {
            width: 70%;
            /* Adjust the width as needed */
        border-radius: 5px;
        }

        */
    </style>
</head>

<body>
    <form action="#" method="POST" class="container">
        <div class="row reg justify-content-center">
            <div class="col-lg-4 offset-md-9">
                <div class="card">
                    <div class="card-action transparent lighten-2 black-text center-align">
                        <h5 class="black-text text-darken-2">REGISTER TO PETMART</h5>
                    </div>
                    <div class="card-content">
                        <div class="mb-3">
                            <label for="FNAME" class="form-label">First Name</label>
                            <input type="text" id="FNAME" name="fname" class="form-control custom-input" required>
                        </div>
                        <div class="mb-3">
                            <label for="LNAME" class="form-label ">Last Name</label>
                            <input type="text" id="LNAME" name="lname" class="form-control custom-input">
                        </div>
                        <div class="mb-3">
                            <div>
                                <label class="form-label">Gender</label>
                            </div>
                            <div class="mb-3 row gender-options">
                                <div class="form-check col-sm-4">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check col-sm-4">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>

                        </div>

                        <div class="mb-3">
                            <label for="EMAIL" class="form-label">Email</label>
                            <input type="text" id="EMAIL" name="email" class="form-control custom-input" required>
                        </div>
                        <div class="mb-3">
                            <label for="PHONE" class="form-label">Phone No.</label>
                            <input type="text" id="PHONE" name="mobile" class="form-control custom-input" required>
                        </div>
                        <div class="mb-3">
                            <label for="ADDR" class="form-label">Address</label>
                            <input type="text" id="ADDR" name="address" class="form-control custom-input" required>
                        </div>
                        <div class="mb-3">
                            <label for="DOB" class="form-label">Date of Birth</label>
                            <input type="date" id="DOB" name="dob" class="form-control custom-input" required>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" id="pass" name="password" class="form-control custom-input" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-register" type="submit" name="submit">Register</button>
                        </div>
                        <div class="mb-3">
                            <p class="text-center">Already have an account? Click here to Login <a href="log.php"
                                    class="btn btn-danger">Login</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>