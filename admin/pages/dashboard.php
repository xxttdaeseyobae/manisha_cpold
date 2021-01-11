<?php include('header.php');
include_once ('../../classes/User.php');
$userObj = new User();

$users = $userObj->getAll();
print_r($users);
if(isset($_GET['logout'])){
    if($_GET['logout']){
        User::logout();
        header("Location: login.php"); 
      }
  }
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <br/>
  <h3>User</h3>
  <hr/>
  <table class="table">
  <thead>
    <tr>
   <!--    <th scope="col">ID</th> -->
      <th scope="col">Username</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    
    <?php while($user=$users->fetch_assoc()){ ?>
   <tr>
         <!--  <td><?= $user['id'] ?></td> -->
      <td><?= $user['username'] ?></td>
      <td><?= $user['fullname'] ?></td>
      <td><?= $user['email'] ?></td>
      
    
  </tr>
  <?php } ?>
  
</tbody>
</table>
</main>

    

   <?php include('footer.php');
   ?>