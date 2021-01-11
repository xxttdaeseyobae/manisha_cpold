<?php 
include("header.php"); 

if(isset($_POST['submit'])){
  $user=new User();
  $user->email=$_POST['email'];
  $user->password=$_POST['password'];
  if($user->login()){
    header("Location: ../index.php");
  }else{
    echo'Wrong Email or password';
  }
}
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="post" action="">
              <div class="form-label-group">
                <label for="inputEmail">Email address</label>
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address"  required autofocus>
              </div>
              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password">
              </div>
              <br/>
              <button class="btn btn-lg btn-primary btn-block " type="submit" name="submit">Sign in</button>
              
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include("footer.php") ?>