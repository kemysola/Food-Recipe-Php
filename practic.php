
<?php

$conn = mysqli_connect('localhost','adekemi','Shade23@','hotel');
//to check our database coonection

if(!$conn){
	echo 'not connected';
} else{
	echo 'connected';
}
