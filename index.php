<?php

require_once('autoload.php');

use Jony\App\Repositories\PostJsonRepositories;

$postsRepo=new PostJsonRepositories();

$posts=$postsRepo->all();
$pos=$postsRepo->find(1);
// $rules=array('email' => 'required|email','password' => 'required|min:8');
// $data=array('email' => 'jony@gmail.com','password' => '334khjkk2');

// $validator=new Jony\App\Validator();

// if($validator->validate($data,$rules) == true){
// 	$jony=new Jony\App\Editor();
	
// 	echo "<pre>";
// 	var_dump($jony->getLogin());
	
// }
// else{
// 	echo "<pre>";
// 	var_dump($validator->getErrors());
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOP</title>
</head>
<body>
	<?php foreach($posts as $post) :  ?>
		<h3> <?php echo $post->title ?> </h3>
		<p> <?php echo $post->body ?> </p>
	<?php endforeach; ?>
	
	<h3> <?php echo $pos->title ?> </h3>

</body>
</html>
