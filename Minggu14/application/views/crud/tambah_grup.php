<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Grup</title> <!--memberikan judul tabel-->
</head>
<body>
	<div class="row">
	<div class="col-lg-7"> 
	<div class="p-5"> 
	<div class="text-center"> 
	<h1 class="h4 text-gray-900 mb-4">Tambah Grup</h1></div> <!--berfungsi untuk menampilkan judul tabel-->
	<form class="user" action="<?php echo base_url('Grup/input');?>" method="post"> <!--berfungsi untuk meload ke controller Grup/input-->
	 
	<div class="form-group"> <!--berfungsi untuk membuat sebuah form-->
	<input type="text" class="form-control form-control-user" id="grup" name="grup" placeholder="Name Grup Maximal 10 Character" require> 
	</div> 
</div> 
<input type="submit" class="btn btn-success" name="submit" value="Tambah"><!--berfungsi untuk membuat tombol 'Tambah'-->
</form><hr> 
<div class="text-center"> 
	<a class="small" href="Grup">Kembali</a> <!--berfungsi untuk membuat alamat link dengan nama'Kembali'-->
</div>
</div>
</div>
</div>
</div>
</body>
</html>
