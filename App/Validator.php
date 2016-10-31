<?php

namespace App;

class Validator
{
	private $errors=array();

	public function validate(Array $data,Array $rules)
	{
		//required|email|min:8
		$valid=true;
		
		foreach ($rules as $item => $ruleset) {
			# code...
			$ruleset=explode('|', $ruleset);

			foreach ($ruleset as $rule) {
				# code...
				$pos=strpos($rule, ':');

				if($pos != false)
				{
					$parameter=substr($rule, $pos+1);
					$rule=substr($rule,0,$pos);
				}
				else{
					$parameter="";
				}

				// validateEmail($item,$value,$param);

				$methodName= 'validate' . ucfirst($rule);

				$value=isset($data[$item]) ? $data[$item] : null;

				if(method_exists($this, $methodName)) {
					$this->$methodName($item,$value,$parameter) OR $valid=false;
				}
			}
		}

		return $valid;
	}

	private function validateRequired($item,$value,$param)
	{
		if($value == "" || $value == NULL){
			$this->errors[$item][] = "The " . $item . " field is required";
			return false;
		}

		return true;
	}

	private function validateEmail($item,$value,$param)
	{
		if(!filter_var($value,FILTER_VALIDATE_EMAIL)){
			$this->errors[$item][] = "your " . $item . " is invalid";
			return false;
		}

		return true;	
	}

	private function validateMin($item,$value,$param)
	{
		if(strlen($value) < $param ){
			$this->errors[$item][] ="Password should be " . $param . " chars long";
			return false;
			
		}

		return true;
	}

	public function getErrors()
	{
		return $this->errors;
	}
}