<?php 
	
	foreach ($tampilsiswabyId->result() as $value) {

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>edit siswa</title>
</head>
<body>
<form action="<?php echo base_url()?>Siswa/proseseditsiswa" method="post">
	<table>
	<input type="hidden" name="NIS_edit" value="<?php echo $value->NIS ?>">
	<br><br>
		<input type="text" name="nama_siswaedit" value="<?php echo $value->nama_siswa ?>">
		<br><br>
		<input type="text" name="alamatedit" value="<?php echo $value->alamat ?>">
		<br><br>
		<input type="text" name="nomor_hpedit" value="<?php echo $value->nomor_hp ?>">
		<br><br>
		<input type="submit" name="submit">
		<br>
	</table>
</form>
</body>
</html>

<?php } ?>