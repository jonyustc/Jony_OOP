<?php

require_once('autoload.php');

$rules=array('email' => 'required|email','password' => 'required|min:8');
$data=array('email' => 'jony@gmail.com','password' => '334khjkk2');

$validator=new Jony\App\Validator();

if($validator->validate($data,$rules) == true){
	$jony=new Jony\App\Editor();
	
	echo "<pre>";
	var_dump($jony->getLogin());
	
}
else{
	echo "<pre>";
	var_dump($validator->getErrors());
}
