<?php
echo 'connected';
echo '<br>';


//function 

function myFunction() {
	echo 'Hello My Name is Kemi';
}

myFunction();



//Global function


$name = "Christy";
//$name_1 = "kemi";

//local
/*function myName(){
	$name ="kemi";
	echo $name;


}

myName();*/
//

function myName(){
	$GLOBALS['name'];
}

myName();
echo $name;



//global
$surname = "Awomolo";
 function mySurname(){
 	$GLOBALS['surname'];
 }


mySurname();
echo $surname;


//superGlobal

$city = "lagos";

function myCity(){
	GLOBALS['cit;y'];
	echo $city
}

myCity();
echo $city;



//
/* function and a global function
local function : name, class , concatenate

global two name , contenate.


*/


//super global


?>













