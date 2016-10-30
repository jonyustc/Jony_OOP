<?php

namespace Jony\App\Traits;

trait Accessible
{
	protected $fillable=array();
	protected $accessible=array();

	public  function __set($name,$value)
	{
		if(!in_array($name, $this->fillable)){
			return false;
		}

		if(property_exists($this, $name)){
			$this->$name=$value;
		}
	}

	public function __get($name)
	{
		if(!in_array($name, $this->accessible)){
			return null;
		}

		return property_exists($this, $name) ? $this->$name : null;
	}
}