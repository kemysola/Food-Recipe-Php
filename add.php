<?php

include("config.php");

include("header.php");




if(isset($_POST['submit'])){
	$image = mysqli_real_escape_string($conn,$_POST['image']);
	$title = mysqli_real_escape_string($conn,$_POST['tittle']);
	$ingredients =mysqli_real_escape_string($conn,$_POST['ingredients']);
	$details = mysqli_real_escape_string($conn,$_POST['details']);


	 $image = $_FILES['image']['name'];
	$target = "image/".basename($image);
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {


	$sql = "INSERT INTO food(image,tittle,ingredients,details) VALUES('$image','$title','$ingredients','$details')";

	//save to db
	if(mysqli_query($conn, $sql)){
		header('Location: index.php');

	
	}else{
		echo 'err:'.mysqli_error($conn);
		
	}
}
}






?>

<div class="container">

<h3 class="green-text center">Add Recipe</h3>
<div class='row'>
	
		<form class="col s12 l12 m12" action='add.php' method='POST' enctype="multipart/form-data">
			<div class='row'>
				<div class='input-field s12'>
		       <!--<label for="food-tittle">Title</label>-->
				<input type="text" name="tittle" placeholder='Title'>
			</div>
		</div>
               
          <div class='row'>
          <div class='input-field s12'>
           <!--<label for="ingredients">Ingredients</label>-->
           <input type="text" name="ingredients" placeholder="Ingredients">
       </div>
   </div>

            
        <div class='row'>
		<div class='input-field s12'>

            	<!--<label for="details">Details</label>-->
				<input type="text" name="details" placeholder="Details">
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

  



	
		



