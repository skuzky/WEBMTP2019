<!DOCTYPE html>
<html>
<head>
	<title>1600018120</title>
</head>
<body>

	<center>
	<H2>Noor Fathurahman</H2>
	<H1>1600018115</H1>
	</center>

	<br><br><hr size="2px" color="black">
	
	TABEL RELASI DOSEN & MAHASISWA<br><br>
	<table border="2">
		<thead>
			<td>NIY</td>
			<td>Nama Dosen</td>
			<td>Matakuliah</td>
			<td>Kelas</td>
		</thead>
		<tbody>
			<?php 
				foreach ($ds as $key => $value) {
					echo "<tr>
					<td>$value[id_dosen]</td>
					<td>$value[nama_dosen]</td>
					<td>$value[nama_matkul]</td>
					<td>$value[kelas]</td>
					</tr>";
				}	
			?>
		</tbody>
	</table>
</body>
</html>