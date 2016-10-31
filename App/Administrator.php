<?php

namespace App;

/**
* 
*/
class Administrator extends User
{
	public function __construct(Array $param=array())
	{
		parent::__construct($param);
	}

	public function getLogin()
	{
		return $this->login();
	}
}