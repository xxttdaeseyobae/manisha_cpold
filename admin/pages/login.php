<?php 
Session_start();
// include '../classes/User.php';
include_once ($_SERVER['DOCUMENT_ROOT']."/hamroluga/classes/User.php");

if(isset($_POST['submit'])){
    $user= new User();
    $user->email = $_POST['email'];
    $user->password=$_POST['password'];
    if($user->adminLogin()){
         header("Location: dashboard.php");
    }else{
        echo 'Email or password is Worng';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>

<link href="../../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../../js/bootstrap.min.js"></script>
<link href="../../css/style1.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="man">
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" method="post" action="">
                <input type="email" class="form-control" placeholder="Email" required name="email" autofocus>
                <br />
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
                    Sign in
                </button>
                </form>
            </div>
            
        </div>
    </div>
</div>

</body> 
</html> 
