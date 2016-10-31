<?php

namespace App\Repositories;

interface PostRepositoriesInterface
{
	public function all();

	public function find($id);
}