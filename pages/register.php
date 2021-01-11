<?php 
include "header.php"; 

if(isset($_POST['submit'])){
	$user = new User();
	$user->username = $_POST['username'];
	$user->fullname =$_POST['fullname'];
	$user->password =$_POST['password'];
	$user->email =$_POST['email'];
	if($user->resgister()){
		echo 'You are registered';
	}else{
		echo 'Error while Registering, Please Try again later';
	}
}
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign Up</h5>
                    <form role="Form" method="post" action="" accept-charset="UTF-8">
						<div class="form-group">
	+						<label for="fname">Username</label>
							<input type="text" id="username" class="form-control" name="username" placeholder="Example: John">
						</div>
                        <div class="form-group">
							<label for="lname">Full Name</label>
							<input type="text" id="fullname" class="form-control" name="fullname" placeholder="Example: Doe" required>
                        </div>
						
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password" placeholder="">
                        </div>
                        <div class="form-group">
							<label for="emailaddr">Email Address</label>
							<input type="email" id="email" class="form-control" name="email" placeholder="Example: john.doe@gmail.com" required autofocus="">
                        </div>
						
						<div class="form-group text-center">
							<button type="submit" class="btn btn-lg btn-primary btn-block" id="submitbtn" name="submit">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 <?php include("footer.php") ?>