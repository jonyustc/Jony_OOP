<?php 

namespace App\Repositories;


class PostXMLRepositories implements PostRepositoriesInterface
{

	protected $posts=array();

	public function __construct()
	{
		$xml=simplexml_load_file(dirname(__FILE__) . '/posts.xml');

		$posts=$xml->xpath('channel/item');



		foreach ($posts as $key => $post) {
			# code...
			$post=json_decode(json_encode($post));

			$post->body= $post->description;
			unset($post->description);
			
			$this->posts[$key + 1 ] =  $post;
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