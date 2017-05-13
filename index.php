<!DOCTYPE html>
<html>
<head>
	<title>Search Pagination Session dengan Codeigniter | AZZURA Media</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/default.css'); ?>">
</head>
<body>
	<div class="wrap">

		<h1>DATA MAHASISWA</h1>

		<form action="<?php echo site_url('guru/index/'); ?>" method="post">
		<p>
			<input type="search" name="cari" placeholder="Search Keyword..."> <input type="submit" name="q" value="Search">
		</p>
    <center>
		<table border="1" width="780px">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>Jurusan</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if (count($ListBerita) > 0) {
					foreach($ListBerita as $row)
					{
						echo "<div class=\"letter\">";
						
						?>
						<tr>
							<td valign="top"><?php echo $row['NIK']; ?></td>
							<td valign="top"><?php echo $row['nama_guru']; ?></td>
							<td valign="top"><?php echo $row['alamat']; ?></td>
							<td valign="top"><?php echo $row['mata_ajar']; ?></td>
						</tr>

				<?php
						echo "</div>";
					}
					echo "<tr><td colspan='6'><div style='background:000; float:right;'><button><a href='../indexx'>Back".$this->pagination->create_links()."</button></div></td></tr>";
				} else {
					echo "<tbody><td colspan='8' style='padding:10px; background:#F00; border:none; color:#FFF;'>Hasil pencarian tidak ditemukan.</td></tbody>";
				}
				?>
			</tbody>
		</table>
		</form>
		</center>
		<center><p>&copy; Do more Do good Big Bang</p></center>
	</div>
</body>
</html>
