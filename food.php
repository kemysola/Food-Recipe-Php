<?php

include('config.php');
include('header.php');


if(isset($_GET['id'])){

	$id = mysqli_real_escape_string($conn, $_GET['id']);
	$select_query = "SELECT * FROM food WHERE id = $id ";
$result = mysqli_query($conn, $select_query);
$food_item = mysqli_fetch_assoc($result);

//print_r($food);

//echo $food_item['ingredients'];
//echo $food_item['tittle'];
//echo $food_item['image'];
mysqli_close($conn);
}

?>

<section>
	<div class="container"> 
		<div class="row">
			<div class="container">
				<h2 class="center"><?php echo $food_item['tittle'];?></h2>
			<div class="col s12 m12 l12">
				<div class="card">
					<div class="card-image">
						<img src="image/<?php echo $food_item['image']; ?>" width="250px" height="250px">
					</div>
						<div class="card-title black-text center"></div>
						<div class="card-content">
							<p class="black-text center"> <?php echo $food_item ['ingredients'];?> </p>
						</div>
						<div class="card-action center">
						<p class="black-text center"> <?php echo $food_item ['details'];?> </p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

		

		
		





<?php
include("footer.php");

?>


