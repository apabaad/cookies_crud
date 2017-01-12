<?php
 $id= $_GET['num'];
 $cookie_value=$_COOKIE['users'];
 $cookie_value=json_decode($cookie_value, true);
 $data=$cookie_value[$id];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Fill the form:</h2>
<form method="post" name="form" enctype="multipart/form-data" action="deleteprocess.php" >
<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" id="name" placeholder="name"class="form-control" value="<?php echo $data['name']; ?>" >
	</div>
<div class="form-group">
	<label>E-mail</label>
	<input type="text" name="email" id="email" placeholder="email" class="form-control" value="<?php echo $data['email']; ?>" >
	</div>
<div class="form-group">
<label>Address</label>
	<textarea placeholder="address" id="address" name="address" class="form-control"><?php echo $data['address']; ?> </textarea>
</div>
<div class="form-group">
<label>Gender</label>
<input type="radio" name="gender" value="m" <?php if ($data['gender']=='m'){ echo "checked";}?>>Male 
<input type="radio" name="gender" value="f" <?php if ($data['gender']=='f'){ echo "checked";} ?>> Female
</div>
<label>Avatar</label>
<input type="file" name="avatar" ><br>
<input type="submit" name="submit" class="btn btn-default">	
<input type="hidden" name="id" value="<?php echo $id;?>" >
</form>
</div>
</body>
</html>