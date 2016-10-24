<?php 

namespace Jony\App\Repositories;


class PostJsonRepositories implements PostRepositoriesInterface
{

	protected $posts=array();

	public function __construct()
	{
		$posts=json_decode(file_get_contents(dirname(__FILE__) . '/posts.json'),true);

		foreach ($posts as $key => $post) {
			# code...
			$this->posts[$key] = (object) $post;
		}
	}

	public function all()
	{
		return $this->posts;
	}

	public function find($id)
	{
		return isset($this->posts[$id]) ? $this->posts[$id] : array();
	}

}