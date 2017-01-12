<?php  
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	$data=array();	
	$cookie_value=array();
	$cookie_value['name']=$_POST['name'];
	$cookie_value['address']=$_POST['address'];
	$cookie_value['gender']=$_POST['gender'];
	$cookie_value['email']=$_POST['email'];

$id=$_POST['id'];

	if (isset($_COOKIE['users'])) {
		$temp=$_COOKIE['users'];
		$temp=json_decode($temp);
		$temp[$id]=$cookie_value;
		$temp=json_encode($temp);
		setcookie('users',$temp, time()+(86400*30));
		header('location:list.php');
	}
}
?>