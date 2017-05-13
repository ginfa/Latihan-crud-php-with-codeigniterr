<script type="text/javascript">

function validasi()
{
	var submitOK="true";
	var a =  document.getElementById("nama_siswa");
	var nama_siswa=a.value;
	if (nama_siswa=="")
	{
	 	alert= ("nama siswa harus di isi");
	 	submitOK="false";
	}

	var b = document.getElementById("alamat");
	var alamat=b.value;
	if (alamat=="")
	 {
	 	alert("alamat harus di isi");
	 	submitOK="false";
	 }

	 var c =document.getElementById("nomor_hp");
	 var nomor_hp=c.value;
	 if (nomor_hp=="")
	  {
	  	alert("nomor hp harus diisi");
	  	submitOK="false";
	  }

	if (submitOK=="false") {
        return false
      }


}
</script>

<!DOCTYPE html>
<html>
<head>
	<title>Siswa</title>
</head>
<body>
	<center><h1>SISWA SMA IT PESANTREN NURRURRAHMAN</h1></center>
	<br><br>
	<center>
	<form action="<?php echo base_url()?>siswa/tambahsiswa" method="post" onsubmit="return validasi()">
        <form action="<?php echo base_url() ?>siswa/uploadFile" method="post">
	<input type="text" name="nama_siswa" id="nama_siswa" placeholder="nama siswa">
	<br><br>
	<input type="text" name="alamat" id="alamat" placeholder="alamat">
	<br><br>
	<input type="text" name="nomor_hp" id="nomor_hp" placeholder="nomor_hp">
	<br><br>
	<input type="file" name="filename">
	<br><br>
	<input type="submit" name="tambah">
	<br><br>
    </form>
	</form>
		<table border="1">
			<tr>
				<th><center>NIS</center></th>
				<th><center>Nama</center></th>
				<th><center>Alamat</center></th>
				<th><center>Nomor Hp</center></th>
				<th></th>
				<th></th>
			</tr>
			<?php
	$NIS = 1;
	foreach ($tampilsiswa->result() as $value) {
	?>
			<tr>
				<td><?php echo $NIS; ?></td>
				<td><?php echo $value->nama_siswa; ?></td>
				<td><?php echo $value->alamat; ?></td>
				<td><?php echo $value->nomor_hp; ?></td>
				<td></td>
				<td>
					<a href="<?php echo base_url();?>Siswa/editsiswa/<?php echo $value->NIS ?>">edit</a>
					<a href="<?php echo base_url();?>Siswa/hapussiswa/<?php echo $value->NIS; ?>">hapus</a>
				</td>
			</tr>
			<?php $NIS++;  } ?>
		</table>
		</center>
</body>
</html>