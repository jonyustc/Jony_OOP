<?php

namespace Jony\App;

/**
* 
*/
class Administrator extends User
{
	public function getLogin()
	{
		return $this->login();
	}
}