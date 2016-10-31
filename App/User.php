<?php 

/**
* 
*/

namespace App;

class User 
{
	use \App\Traits\Curlable;
	use \App\Traits\Accessible;

	protected $email;
	protected $password;
	protected $facebookid;
	

	public function __construct(Array $param=array())
	{

		$this->fillable[] = 'facebookid';
		$this->accessible[] = 'facebookid';

		if(count($param)){
			foreach ($param as $key => $value) {
				# code...
				$this->$key=$value;

			}
		}
	}

	public function getFacebookData()
	{
		$url= 'http://graph.facebook.com/' . $this->facebookid;
		return json_decode($this->curl($url),true);
	}

	

	public function __tostring()
	{
		$data=array();

		foreach ($this->accessible as $key) {
			# code...
			
			$data[$key]=$this->$key;
		}

		return json_encode($data);
	}



	public function setPassword($string)
	{
		$this->password=$string;
		return $this;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setEmail($string)
	{

		$this->email=$string;
		return $this;
	}

	public function getEmail()
	{
		return $this->email;
	}

	// abstract function login();

	public function login()
	{
		$path=explode('\\', get_class($this));
		
		$class_name=array_pop($path);
		return "Logged in user as " . $class_name;
	}
}