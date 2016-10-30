<?php

require_once('autoload.php');

$addressRepository= new \Jony\App\Repositories\AddressArrayRepository();

$addressRepo=new Jony\App\Address($addressRepository);
$address=$addressRepo->Find(2);
echo "<pre>";
var_dump($address->city);

// $admin=new Jony\App\Administrator();
// $admin->facebookid='1547534805552048';
// echo "<pre>";
// var_dump($admin->facebookid);
// var_dump($admin->getFacebookData());




// use Jony\App\Repositories\PostJsonRepositories;
// use Jony\App\Repositories\PostXMLRepositories;

// $postsRepo=new PostXMLRepositories();

// $posts=$postsRepo->all();
// $pos=$postsRepo->find(1);
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

<!-- 
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
</html> -->
