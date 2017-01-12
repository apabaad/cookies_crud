<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php 
if(isset($_COOKIE['users'])){
$cookie_value=json_decode($_COOKIE['users'],true); }
 ?>
<div class="container">
	<h2>List page</h2>
	<table class="table">
		<tr>
			<th>S.No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Action</th>
		</tr>
		<?php
		if(isset($cookie_value)) {
			foreach ($cookie_value as $key=> $value) {
				
			
		 ?>
		
		<tr>
			<td><?php echo "$key "+" 1"; ?></td>
			<td><?php echo $value['name'];  ?> </td>
			<td><?php echo $value['email']; ?> </td>
			<td><?php echo $value['address'];?></td>
			<td><?php echo $value['gender'];?></td>
			<td><a href= "edit.php?num=<?php echo "$key";?>">Edit</a> | <a href="delete.php?num=<?php echo "$key";?>">Delete</a></td>
		</tr>
	<?php	} } ?>
	</table>
 

</div>
</body>
</html>