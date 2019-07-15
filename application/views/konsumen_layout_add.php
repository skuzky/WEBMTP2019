<!DOCTYPE html>
<html>
<head>
	<title>Point of Sales</title>
</head>
<body>
	<h3>Tambah Transaksi</h3>
	<?php echo validation_errors(); ?>
	<p>
	<?php 
	echo form_open('konsumen/tambahbeli');
	echo form_label('Nama Barang','namabarang').'<br>';
	echo form_input('namabarang', set_value('namabarang')).'<br>';
	echo form_label('Harga Satuan','hargasatuan').'<br>';
	echo form_input('hargasatuan', set_value('hargasatuan')).'<br>';
	echo form_label('Jumlah','jumlah').'<br>';
	echo form_input('jumlah', set_value('jumlah')).'<br>';
	echo form_submit('mysubmit','Simpan'); 
	echo form_close();
	 ?>
	</p>

</body>
</html>