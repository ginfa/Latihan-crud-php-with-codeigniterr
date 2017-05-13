<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<center>LOGIN</center>
<br><br>
<center>
<?php echo form_open('Login/checklogin'); ?>
<input type="text" name="username" required="true" max="12">
<br><br>
<input type="text" name="pwd" required="true" max="12">
<br><br>
<input type="submit" name="submit" value="submit">
</center>
</form>
</body>
</html>