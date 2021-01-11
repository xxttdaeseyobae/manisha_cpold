<?php
include_once ('header.php');
if(isset($_POST['submit'])){
	$book = new book();
	$book->username = $_POST['username'];
	$book->name =$_POST['name'];
	$book->days =$_POST['days'];
	if($book->book()){
		echo 'You are registered';
	}else{
		echo 'Error while Registering, Please Try again later';
	}
}
?>
<h2>Booking <span class="badge badge-secondary"</span></h2>
<form role="Form" method="post" action="" > 
<label class="sr-only" for="inlineFormInputGroupUsername2" >Username</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text">@</div>
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username" name="username" required="true">
  </div>

  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect"  name="name" required="true">Preference</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect"  name="name" >
        <option selected>Choose products </option>
        <option value="1"> Tshirt </option>
        <option value="2">Pants</option>
        <option value="3">Dress</option>
      </select>
    </div>
</div>
    
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect" name="days" required="true">Preference </label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="days">
        <option selected>Days</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
          <option value="4">4</option>
         
      </select>
    </div>
<button type="submit" class="btn btn-success" name="submit">submit</button>
</div>

    

  

</form>


<?php


include_once('footer.php');
?>