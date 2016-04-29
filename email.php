<?php 
$errors=array();
$email = $_POST['email'];
$content = $_POST['content'];
$title = $_POST['title'];
$me = "contact@eungtony.fr";
$headers.= "FROM:".$email."\n";

if(empty($_POST['email'])){
	$errors['email']= "Vous n'avez pas rentré d'adresse mail";
}

if(empty($_POST['title'])){
	$errors['title']= "Vous n'avez pas rentré de sujet pour votre mail !";
}

if(empty($_POST['content'])){
	$errors['content']= "Vous n'avez pas rédigé de message !";
}

if (empty($errors)&&isset($headers)) {
	mail($me, $title, $content,$headers);
	header("location:index.php");
}


 ?>

