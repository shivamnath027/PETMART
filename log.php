<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "petmart";
$con = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['username'])) {
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from login where email='" . $uname . "'AND password='" . $password . "' limit 1";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION["username"] = $uname;
        $query1 = mysqli_query($con, "select fname,lname,mobile,dob,email,gender,address from login where email='" . $_SESSION["username"] . "' "); {
            $row = mysqli_fetch_assoc($query1);
            $_SESSION["fname"] = $row["fname"];
            $_SESSION["lname"] = $row["lname"];
            $_SESSION["mobile"] = $row["mobile"];
            $_SESSION["dob"] = $row["dob"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["gender"] = $row["gender"];
            $_SESSION["address"] = $row["address"];
        }
        echo "<script> window.location.assign('main.php'); </script>";
        exit();
    } else {
        echo "<script>
             alert('INVALID CREDENTIALS');
             window.location.assign('log.php'); 
             </script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="pic/favicon.ico" type="image/ico">
    <title>LOGIN PAGE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(pic/dog_cat.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            min-height: 100vh;
        }

        .login {
            margin-top: 80px;
        }

        .login-form {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            padding: 20px;
            margin-top: 40px;
        }

        .login label {
            font-size: 16px;
            color: black;
        }

        .login input {
            font-size: 16px;
            color: burlywood;
        }

        .login-heading {
            font-size: 30px;
            text-align: center;
            color: #9DBDE4;
            font-weight: bold;
            margin-bottom: 50px;
        }

        .form-pass {
            margin-bottom: 60px;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center login">
            <div class="col-md-4">

                <form action="#" method="POST" class="login-form">
                    <div class="login-heading">
                        <p>USER LOGIN</p>
                    </div>
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group form-pass">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Login</button>
                </form>
                <p class="text-center mt-3">New User? <a href="reg.php">Click here to register</a></p>
                <p class="text-center">Login as admin? <a href="admin.php">Click here</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>