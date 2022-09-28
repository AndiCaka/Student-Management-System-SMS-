
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/php-template/forgot-password.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:58 GMT -->
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
    $isAccountInDB = "select * from user 
    where username = '".$_POST['username']."' && password = '".$_POST['password']."'";
    $isAccountQuery = mysqli_query($conn, $isAccountInDB);
    
    if(!($product = mysqli_fetch_assoc($isAccountQuery))){
        $sql = "INSERT into user 
        (name, surname, age, gender, username, password, role)
        VALUES ('".$_POST['name']."', '".$_POST['surname']."', '".$_POST['age']."', '".$_POST['gender']."', '".$_POST['username']."' , '".$_POST['password']."','".$_POST['role']."')";

        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "An error occurred: ".mysqli_error();
        }else{
            ?>
                <div class="alert alert-success" role="alert">
                <i class="bi bi-check2-all"></i>  <?php echo $_POST['name'] ?> added successfully!
                </div>
            <?php
            header("Location: login.php");
        }
    }
    else{
        ?>
            <div class="alert alert-danger" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>  <?php echo $_POST['name'] ?> already exist!
            </div>
        <?php
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

<form action="https://preschool.dreamguystech.com/php-template/login.php">
<div class="form-group">
<input class="form-control" type="text" placeholder="Name">
</div>
<div class="form-group">
<input class="form-control" type="text" placeholder="Surname">
</div>
<div class="form-group">
<input class="form-control" type="text" placeholder="Gender">
</div>
<div class="form-group">
<input class="form-control" type="text" placeholder="Age">
</div>
<div class="form-group">
<input class="form-control" type="text" placeholder="Username">
</div>
<div class="form-group">
<input class="form-control" type="text" placeholder="Password">
</div>
<div class="form-group">
<input class="form-control" type="text" placeholder="Role">
</div>

<div class="form-group mb-0">
<button class="btn btn-primary btn-block" type="submit">Reset Password</button>
</div>
</form>

<div class="text-center dont-have">Remember your password? <a href="login.php">Login</a></div>
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

<!-- Mirrored from preschool.dreamguystech.com/php-template/forgot-password.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:58 GMT -->
</html>
