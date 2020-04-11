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

	a {
		color: black;
		background-color: #E0D8D6;
		border-radius: 5px;
		font-weight: normal;
		padding : 1px 5px;
		font-size: 20px;
		text-decoration: none;
	}

	h3 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
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
		<h3>Aplikasi CRUD</h3>
		<p><i>Create, Read, Update and Delete</i></p>
		<a href="<?php base_url() ?>tambah_data" class="tambah">Tambah Data</a>
		<br><br>
		<a href="<?php base_url() ?>tampil_data" class="daftar">Daftar Data</a>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>