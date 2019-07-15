<!DOCTYPE html>
<html>
<head>
	<title>Daftar Dosen Teknik Informatika</title>
</head>
<body>
<?php 
	
	foreach ($dosen as $key => $value) {
		echo "NIY : ".$value['nama'].",";
		echo "Nama : ".$value['niy'].",";
		echo "Alamat : ".$value['alamat'].",<br/>";
		foreach ($mhs as $key1 => $value1) {
					echo "-->NIM  : ".$value1['nim']."<br/>";
					echo "-->Nama : ".$value1['namamhs']."<br/>";
		}
	
	}

 ?>
</body>
</html>