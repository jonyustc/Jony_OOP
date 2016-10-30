<?php

namespace Jony\App\Repositories;

interface AddressRepositoryInterface
{
	public function Find($id,\Jony\App\Address $address);
}