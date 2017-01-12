
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Fill the form:</h2>
<form method="post" name="form" enctype="multipart/form-data" action="cookieprocess.php" >
<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" id="name" placeholder="name"class="form-control">
	</div>
<div class="form-group">
	<label>E-mail</label>
	<input type="text" name="email" id="email" placeholder="email" class="form-control">
	</div>
<div class="form-group">
<label>Address</label>
	<textarea placeholder="address" id="address" name="address" class="form-control"></textarea>
</div>
<div class="form-group">
<label>Gender</label>
<input type="radio" name="gender" value="m">Male 
<input type="radio" name="gender" value="f">Female
</div>
<label>Avatar</label>
<input type="file" name="avatar" ><br>
<input type="submit" name="submit" class="btn btn-default">	
</form>
</div>
</body>
</html>