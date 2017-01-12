<!DOCTYPE html>
<html>
<head>
	<title>Registered users</title>
</head>

<body>
<?php  
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	$data=array();	
	$cookie_value=array();
	$cookie_value['name']=$_POST['name'];
	$cookie_value['address']=$_POST['address'];
	$cookie_value['gender']=$_POST['gender'];
	$cookie_value['email']=$_POST['email'];

	if (isset($_COOKIE['users'])) {
		$temp=$_COOKIE['users'];
		$temp=json_decode($temp);
		$temp[]=$cookie_value;
		$temp=json_encode($temp);
		setcookie('users',$temp, time()+(86400*30));
		header('location:list.php');
	} else {

	$data[]=$cookie_value;
	$data=json_encode($data); 
	setcookie('users',$data, time()+(86400*30));
	header('location:list.php');

	}
	 

	
}
?>

</body>
</html>