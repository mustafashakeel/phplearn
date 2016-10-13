<?php



// This is the first line of code 
echo 'Hello World <br/>';

// Integer

$number =38;

echo '<br/>'.$number;

# This is a Variable 

$name = 'Mustafa';

echo '<br/> My name is : '.$name;
// This is a Constant 


define('city','My City is Vancouver ');

echo '<br/> '.city.'<br/>';

// Some Operators practice 

$math = 4+91;
echo $math;

// Concatination 

$concat = 'My name is ';
$concat .=' Mustafa';
echo " <br/>contact example<br/>";
echo $concat;


$a = 5;
$b = 10;
if(($a ==5) && ($b ==10 )) {
	echo '<br/>True';
} 


// For Loop Example 

for($i =0 ; $i <10 ; $i++){


	echo ' <br/> This is inside For Loop '.($i+1);
}


// First Function 

function myFirstFunction(){
	echo '<br/>This is from my First Function';
}

myFirstFunction();


// Global vs Local Test 

$myGlobal = 10;

function localFunction(){
	echo ' <br/>this is Local calling global variable'.$myGlobal;

}

function globalFunction(){
	global $myGlobal;
	echo '<br/> this is calling Global variable '.$myGlobal;
}

localFunction();
globalFunction();

// Return Functions 

function returnFunction(){

	return  '<br/>This is returned ';
}
$return =  returnFunction();

echo $return;


// return Function example 

$temperature = 100;

function testTemperature(){

	global $temperature;
	if($temperature == 100 ){
		return true;
	}else{
		return false;
	}


}
if (testTemperature()){
	echo '<br/>the water is boiling ';
}else{
	echo ' <br/>heat it further ';
}


// Passing Arguments in a Function 

function passArgs($city){
	echo " <br/>I live in  ".$city;

}

passArgs('Coquitlam');


// Recursive Function Example 

function recursFunc($num){

if($num <=1){
	return 1;
	}else{
		return $num * recursFunc($num-1);
	}

}

echo '<br/> recursive function Example </br/>'.recursFunc(10);

$var = ' Mustafa';
$dvar = 'var';
echo '<br/> Dynamic variable '.$$dvar;

// getTypes Example 

$types1 = 23;
$types2 = 'asfasdfasdf';
$types3 = true;
//$types4 = myFirstFunction;

echo '<br/> get types :  '.gettype($types1);
echo '<br/> get types :  '.gettype($types2);
echo '<br/> get types :  '.gettype($types3);
//echo '<br/> get types :  '.gettype($types4);


// isset example 

if(isset($varset)){
	echo '<br/> variable is set';
}else{
	echo '<br/>the variable is not set ';
	$varset = 100;
	echo '<br/>now it is set '.$varset;
}


// print_r example 

$arrayexample = array('awesome',23,'Mustafa');
echo '<pre>';
print_r($arrayexample);
echo '<pre/>';
?>