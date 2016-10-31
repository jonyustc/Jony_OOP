<?php

namespace App;

use App\Repositories\AddressRepositoryInterface;

class Address
{
	use \App\Traits\Accessible;

	protected $street;
	protected $city;
	public $addressRepository;

	// AddressRepositoryInterface is dependency injection

	public function __construct(AddressRepositoryInterface $addressRepository)
	{
		$this->addressRepository=$addressRepository;
		$this->fillable[]='street';
		$this->fillable[]='city';
		$this->accessible[]='street';
		$this->accessible[]='city';
	}

	public function Find($id)
	{
		$this->addressRepository->Find($id,$this);
		return $this;
	}
}