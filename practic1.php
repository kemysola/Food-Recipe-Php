<?php

include('config.php');
echo '<br>';



//php query


$select_query = 'SELECT * FROM hotel';
$result = mysqli_query($conn, $select_query);
$hotel =mysqli_fetch_all($result, MYSQLI_ASSOC);

//echo $hotel_details["agent"];
//print_r($hotel);

//close query

mysqli_close($conn);
//created html boiler plate after doing the php on top


?>

<!Doctype html>

<html lang="en">
	<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	</head>

	<body>
		<h2 class="center">A mini Database</h2>
		<p class="center red-text">This is mini database</p>
		<br>
		<br>

//section for php where we can display our information

		<section>
			<div class='container'>
				<div class='row'>

<?php foreach ($hotel as $hotel_item) { ?>

	<div class='col s4 m4 l4'>
      <div class="card blue-grey darken-1">
      	        <div class="card-content white-text">
      	        	          <span class="card-title center"> <?php echo $hotel_item['status'];?> </span>
      	        	          <p class='white-text center'> <?php echo $hotel_item['location'];?> </p>

      	        	
      	        </div>

		</div>
	</div>
<?php } ?>


				</div>
			</div>
		</section>

	</body>
	</html>