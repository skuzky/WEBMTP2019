<!DOCTYPE html>
<html>
<head>
	<title>Daftar Matakuliah Teknik Informatika</title>
</head>
<body>
	<center>
	<table border="2">
		<thead> 
			<td>Kode Matakuliah</td>
			<td>Nama Matakuliah</td>
			<td>Semester</td>
		</thead>
		<tbody>
			<?php 
				foreach ($mk as $key => $value) {
					echo "<tr>
					<td>$value[id_matkul]</td>
					<td>$value[nama_matkul]</td>
					<td>$value[semester]</td>
					</tr>";
				}	
			?>
		</tbody>
		
	</table></center>
</body>
</html>