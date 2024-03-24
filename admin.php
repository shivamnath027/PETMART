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
    $sql = "select * from admintable where uname='" . $uname . "'AND password='" . $password . "' limit 1";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION["uname1"] = $uname;
        $query1 = mysqli_query($con, "select uname,rest_addr,phone from admintable where uname='" . $_SESSION["uname1"] . "' "); {
            $row = mysqli_fetch_assoc($query1);
            $_SESSION["uname"] = $row["uname"];
            $_SESSION["rest_addr"] = $row["rest_addr"];
            $_SESSION["phone"] = $row["phone"];
        }
        echo "<script> window.location.assign('admin_main.php'); </script>";
        exit();
    } else {
        echo "<script>
         alert('INVALID CREDENTIALS');
         window.location.assign('admin.php'); 
         </script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="pic/favicon.ico" type="image/ico">
    <title>MANAGER LOGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url(pic/dog_cat.jpg);
            background-size: cover;
            color: white;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;

        }

        .login {
            margin-top: 80px;
        }

        .login-form {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 5px;
            margin-top: 40px;
        }

        .login label {
            font-size: 16px;
            color: white;
        }

        .login input {
            font-size: 16px;
            color: white;
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
                        <p>ADMIN LOGIN</p>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group form-pass">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Login</button>
                </form>
                <p class="text-center mt-3">Login as user? <a href="log.php">Click here</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>