
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:58 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Forgot Password</title>

<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email']
    $password = $_POST['password'];
    $copassword = $_POST['copassword'];

    // Check if user exists
    $sql = "select * from sms where name = '".$name."'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    $errors = [];
    $formValues['name'] = $name;

    if(!$user){
        $errors['name'] = true;
    }
    else{
        // check if password is OK
        if($password != $user['password']){
            $errors['password'] = true;
        }else{
            $role = $user['role'];
            unset($user['password']);
            $_SESSION['user'] = $user;
            if($role == "admin"){
                header("Location: .login.php");
            }else{
                header("Location: index.php");
            }
            
        }
    }
}

?>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Forgot Password?</h1>
<p class="account-subtitle">Enter your email to get a password reset link</p>

<form action="https://preschool.dreamguystech.com/html-template/login.html">
<div class="form-group">
<<<<<<<< HEAD:forgot-password.html
========
<input class="form-control" type="text" placeholder="Name">
</div>
<div class="form-group">
<input class="form-control" type="text" placeholder="Surname">
</div>
<div class="form-group">
>>>>>>>> 9c66755f0929f29f6c0d8e0550c31f62ae9b4b8e:register.php
<input class="form-control" type="text" placeholder="Email">
</div>
<div class="form-group mb-0">
<button class="btn btn-primary btn-block" type="submit">Reset Password</button>
</div>
</form>

<div class="text-center dont-have">Remember your password? <a href="login.html">Login</a></div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<<<<<<<< HEAD:forgot-password.html
<!-- Mirrored from preschool.dreamguystech.com/html-template/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:58 GMT -->
</html>
========
<!-- Mirrored from preschool.dreamguystech.com/html-template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:58 GMT -->
</html>

>>>>>>>> 9c66755f0929f29f6c0d8e0550c31f62ae9b4b8e:register.php
