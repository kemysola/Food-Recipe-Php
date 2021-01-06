<?php
include('practic.php');



if(isset($_POST['submit'])){
	$image = mysqli_real_escape_string($conn,$_POST['image']);
	$status = mysqli_real_escape_string($conn,$_POST['status']);
	$bedroom = mysqli_real_escape_string($conn,$_POST['bedroom']);
	$type = mysqli_real_escape_string($conn,$_POST['type']);
	$location = mysqli_real_escape_string($conn,$_POST['location']);
	$agent =mysqli_real_escape_string($conn,$_POST['agent']);
	$contact = mysqli_real_escape_string($conn,$_POST['contact']);
	$price = mysqli_real_escape_string($conn,$_POST['price']);


	 $image = $_FILES['image']['name'];
	$target = "image/".basename($image);
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {


	$sql = "INSERT INTO food(image,status,bedroom,type,location,agent,contact,price) VALUES('$image','$status','$bedroom','$type','$location','$agent','$contact','$price')";

	//save to db
	if(mysqli_query($conn, $sql)){
		echo 'ok';
		//header('Location: index.php');

	
	}else{
		echo 'err:'.mysqli_error($conn);
		
	}
}
}






?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>

<div class="container">

<h3 class="green-text center">Admin</h3>
<div class='row'>
	
		<form class="col s12 l12 m12" action='add.php' method='POST' enctype="multipart/form-data">
			<div class='row'>
				<div class='input-field s12'>
		       <!--<label for="food-tittle">Title</label>-->
				<input type="text" name="status" placeholder='status'>
			</div>
		</div>
               
          <div class='row'>
          <div class='input-field s12'>
           <!--<label for="ingredients">Ingredients</label>-->
           <input type="text" name="bedroom" placeholder="bedroom">
       </div>
   </div>

            
        <div class='row'>
		<div class='input-field s12'>

            	<!--<label for="details">Details</label>-->
				<input type="text" name="location" placeholder="location">
			</div>
		</div>
		<div class='row'>
	<div class='col s12'>
		<input type='file' name='image'/>
	</div>
</div>
		<div class='row'>
		<div class='input-field s12'>
        <input type='submit' name='submit' value='submit'>
    </div>
</div>

</form>
      </div>
  </div>

</body>
</html>

  



	
		



