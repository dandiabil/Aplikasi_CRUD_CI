<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aplikasi CRUD</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}


	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 9px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		padding : 30px 20px;
		margin: 80px auto;
		width : 350px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	
	</style>
</head>
<body>

<div id="container">

	<div id="body">
		<?php echo form_open(crud/simpan_data) ?>

        <label for="id_barang">ID Barang</label>
        <input type="text" name="id_barang" placeholder="Masukkan ID Barang">

        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" placeholder="Masukkan Nama Barang">

        <label for="jenis_barang">Jenis Barang</label>
        <input type="text" name="jenis_barang" placeholder="Masukkan Jenis Barang">

        <label for="harga">Harga Barang</label>
        <input type="text" name="harga">

        <label for="stok">Stok Barang</label>
        <input type="text" name="stok">

        <button type="submit">Simpan</button>
        <button type="reset">Reset</button>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>