<script type="text/javascript">

function validasi()
{
	submitOK="true";
	var a=document.getElementById('nama_guru');
	var nama_guru=a.value;
	if (nama_guru=="")
	 {
	 	alert("nama harus di isi");
	 	submitOK="false";
	 }

	 var b=document.getElementById('alamat');
	 var alamat=b.value;
	 if (alamat=="")
	  {
	  	alert("alamat harus di isi");
	  	submitOK="false";
	  }

	  var c=document.getElementById('mata_ajar');
	  var mata_ajar=c.value;
	  if (mata_ajar=="")
	   {
	   		alert("mata ajar harus di isi");
	   		submitOK="false";
	   }

	   if (submitOK="false")
	   {
	   		return false
	   }
}

</script>
<!DOCTYPE html>
<html>
<head>
	<title>guru</title>
</head>
<body>
<form action="<?php echo base_url()?>Guru/tambahguru" method="post">
<input type="text" name="nama_guru" id="nama_guru" placeholder="nama guru">
<br><br>
<input type="text" name="alamat" id="alamat" placeholder="alamat">
<br><br>
<input type="text" name="mata_ajar" id="mata_ajar" placeholder="mata ajar">
<br><br>
<input type="file" name="filename">
<br><br>
<input type="submit" name="submit" value="submit">
<br><br>
</form>
<table border="1" style="margin-left: 50%; ">
	<tr>
		<th>NIK</th>
		<th>Nama Guru</th>
		<th>alamat</th>
		<th>mata ajar</th>
		<th>aksi</th>
	</tr>
	<?php
	$NIK = 1;
	foreach ($tampilguru->result() as $value ) {
	 ?>
	<tr>
		<td><?php echo $NIK; ?></td>
		<td><?php echo $value->nama_guru; ?></td>
		<td><?php echo $value->alamat; ?></td>
		<td><?php echo $value->mata_ajar; ?></td>
		<td>
			<button><a href="<?php echo base_url();?>Guru/editguru/<?php echo $value->NIK ?>">edit</a></button>
			<button><a href="<?php echo base_url();?>Guru/hapusguru/<?php echo $value->NIK ?>">hapus</a></button>
		</td>
	</tr>
	<?php $NIK++; } ?>
	<button><a href="<?php echo base_url();?>Guru/index/">data mahasiswa</a></button>
</table>
<br><br><br>
</body>
</html>
