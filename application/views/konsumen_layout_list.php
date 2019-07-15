<!DOCTYPE html>
<html>
<head>
	<title>Point of Sales</title>
</head>
<body>
	<?php 
	echo anchor('konsumen/tambahbeli()','Tambah Data');
	$this->table->set_heading('ID','Nama Barang','Harga Satuan','Jumlah','Total','Discount 20%', 'Tanggal');
	
	foreach ($transaksi as $key => $value) {
		$total = $value['hargasatuan']*$value['jumlah'];

	 	$this->table->add_row($value['id'],$value['namabarang'],$value['hargasatuan'],$value['jumlah'], ($total), (($total*20)/100), $value['tanggal']);
	 		// (echo tanggal()));
	 	# code...
	

	 }
	 echo $this->table->generate();
?>

</body>
</html>