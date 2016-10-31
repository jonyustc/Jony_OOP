<?php

namespace App\Repositories;

class AddressArrayRepository implements AddressRepositoryInterface
{
	protected $addressess;

	public function __construct()
	{
		$this->addressess= $this->getAddress();
	}

	public function Find($id,\App\Address $address)
	{
		if(isset($this->addressess[$id])){
			foreach ($this->addressess[$id] as $key => $value) {
				# code...
				$address->$key=$value;
			}
			return $address;
		}

		
	}

	public function getAddress()
	{
		return array(
			1 => array(
				'street' => '1 Clinton Hill',
				'city'   =>  'washington'
			),
			2 => array(
				'street' => '1 Rose Hill',
				'city'   =>  'London'
			),
			3 => array(
				'street' => '1 Dam Hill',
				'city'   =>  'Dhaka'
			),
		);
	}
}