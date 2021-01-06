<?php 


include('config.php');


include('header.php');





/*$select_query ="SELECT * FROM food";
$result = mysqli_query($conn, $select_query);
$food_details = mysqli_fetch_assoc($result);

echo $food_details["ingredients"];
mysqli_close($conn);*/



$select_query ="SELECT * FROM food ORDER by date DESC limit 3";
$result = mysqli_query($conn, $select_query);
$food = mysqli_fetch_all($result, MYSQLI_ASSOC);

//print_r($food);

//echo $food_item['ingredients'];
//echo $food_item['tittle'];
//echo $food_item['image'];
mysqli_close($conn);

?>

<div class="container">
	<h5 class="center red-text">Tastee <span class="black-text">Recipe</span></h5>
</div>

<section>
	<div class="container">
		<div class="row">
			<?php foreach ($food as $food_item){ ?>
			
			<div class="col s12 m6 l4">
				<div class="card">
					<div class="card-image">
						<img src="image/<?php echo $food_item['image']; ?>" width="250px" height="250px">
					</div>
						<div class="card-title black-text center"> <?php echo $food_item['tittle'];?></div>
						<!--<div class="card-content">
							<p class="black-text center"> <?php //echo $food_item ['ingredients'];?> </p>
						</div>-->
						<div class="card-action center">
							<a href="food.php?id=<?php echo $food_item['id'] ?>" class="red-text">Read Me</a>
						</div>
					</div>
				</div>

			<?php } ?>

			</div>
		</div>
	
</section>

<!--<div class="container">
	<h4 class="center green-text">African Delicacies</h4>
</div>-->






<?php


include('footer.php');
?>