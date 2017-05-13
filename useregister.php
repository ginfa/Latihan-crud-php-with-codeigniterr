<!DOCTYPE html>
<html>
<head>
	<title>Page register</title>
</head>
<body>
<center>REGISTRASI</center>
<br><br>
<form>
<?php echo form_open('Registerpage/register') ?>
	<input type="username" name="username" placeholder="username" >
	<br><br>
	<input type="password" name="pwd" placeholder="password">
	<br><br>
	<input type="submit" name="submit">
	<br><br>
</form>
</body>
</html>