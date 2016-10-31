<?php

namespace App;

/**
* 
*/
class Editor extends User
{
	public function getLogin()
	{
		return $this->login();
	}
}