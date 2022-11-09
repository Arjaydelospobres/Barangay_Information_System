<?php
$con = mysqli_connect("localhost","root",""," ");
if (isset($_POST['submit'])) {
	# code...
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<input type="text" name="lastname" placeholder="lastname">
	<input type="text" name="contribution" placeholder="your contribution number">
	<input type="submit" name="submit">
</form>
</body>
</html>