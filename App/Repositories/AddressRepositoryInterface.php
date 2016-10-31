<?php

namespace App\Repositories;

interface AddressRepositoryInterface
{
	public function Find($id,\App\Address $address);
}