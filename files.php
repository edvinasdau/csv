<?php

// File handling

//$letter_count = readfile("text.txt");

// $file = fopen("users.csv", "r") or die ("Unable to open file !");

// $contents = fread($file, filesize("text.txt"));

// fclose($file);

// $words = explode(" ", $contents);

// print_r($words);

// echo $words[0];

//echo fgets($file);


// while(!feof($file)) {
// 	echo fgets($file);
// }

// $people = [];

// while(!feof($file)) {

// 	$people[] = explode(",", fgets($file));
// }

// fclose($file);

// print_r($people);

// function write() {	

// 	$users = [
// 	["Jonas", "Jonauskas"], // 0
// 	["Petras", "Petravicius"], // 1
// ];


// $myfile = fopen("users.csv", "w") or die("Unable to open file!");

// foreach ($users as $user) {

// 	print_r($user);			

// 	$txt = $user[0] . "," . $user[1] . "\n";
// 	fwrite($myfile, $txt);
// }
// fclose($myfile);
// }


// foreach ($users as $user) {
// 	$row = implode(",", $user);

// 	$row .= "\n";
// 	fwrite($myfile, $row);
// }
// fclose($myfile);

$file = fopen("customers.csv", "r") or die ("Unable to open file !");
//$contents = fread($file, filesize("customers.csv"));
while(!feof($file)) {
	$customers[] = explode(",",rtrim(fgets($file), "\n"));
}
fclose($file);	

$newfile = fopen("email.csv", "w") or die ("Unable to open file !");
$id = 1;
foreach ($customers as $customer) {
$row = $id++ . "." . $customer[0]."@php.lt," . $customer[1] . "\n";
fwrite($newfile, $row);
}

fclose($newfile);	
array_shift($argv); //ismetamas nulinis elementas
$funcName = array_shift($argv); 
//call_user_func_array($funcName, $argv);