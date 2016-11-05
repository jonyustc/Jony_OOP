<?php

namespace App;

class Login
{
	protected $conn;

	public function __construct()
	{
		$this->conn=new mysqli(DB_HOST,DB_NAME,DB_USER,DB_PASSWORD);

		if(mysqli_connect_error()){
			trigger_error("Problem in database connection",E_USER_ERROR);
		}
	}

	protected function loginUser()
	{
		$sql="SELECT * FROM users";

		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];


	}
}