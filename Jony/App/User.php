<?php 

/**
* 
*/

namespace Jony\App;

class User 
{
	protected $email;
	protected $password;
	protected $fillable=array('email','password');
	protected $accessible=array('email','password');
	

	public function __construct(Array $param=array())
	{
		if(count($param)){
			foreach ($param as $key => $value) {
				# code...
				$this->$key=$value;

			}
		}
	}

	public  function __set($name,$value)
	{
		if(!in_array($name, $this->fillable)){
			return false;
		}

		if(isset($this->$name)){
			$this->$name=$value;
		}
	}

	public function __get($name)
	{
		if(!in_array($name, $this->accessible)){
			return null;
		}

		return isset($this->$name) ? $this->$name : null;
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