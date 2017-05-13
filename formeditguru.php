<?php 
	
	foreach ($tampilgurubyId->result() as $value) {

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>edit siswa</title>
</head>
<body>
<form action="<?php echo base_url()?>Guru/proseseditguru" method="post">
	<table>
	<input type="hidden" name="NIK_edit" value="<?php echo $value->NIK ?>">
	<br><br>
		<input type="text" name="nama_guruedit" value="<?php echo $value->nama_guru ?>">
		<br><br>
		<input type="text" name="alamatedit" value="<?php echo $value->alamat ?>">
		<br><br>
		<input type="text" name="mata_ajaredit" value="<?php echo $value->mata_ajar ?>">
		<br><br>
		<input type="submit" name="submit">
		<br>
	</table>
</form>
</body>
</html>

<?php } ?>