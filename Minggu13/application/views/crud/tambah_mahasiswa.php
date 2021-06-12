<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah User</title> <!--memberikan judul tabel-->
</head>
<body>
	<div class="row">
	<div class="col-lg-7"> 
	<div class="p-5"> 
	<div class="text-center"> 
	<h1 class="h4 text-gray-900 mb-4">Tambah User</h1></div> <!--berfungsi untuk menampilkan judul tabel-->
	<form class="user" action="<?php echo base_url('Mahasiswa/input');?>" method="post"> <!--berfungsi untuk meload ke controller-->
	
	<div class="form-group"> <!--berfungsi untuk membuat sebuah form-->
	<input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Maximal 10 Character" require> 
	</div> 
	<div class="form-group"> <!--berfungsi untuk membuat sebuah form-->
	<input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Name Maximal 10 Character" require> 
	</div>
	<div class="form-group"> 
	<input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password Maximal 6 Character" require> 
	</div>
	<div class="form-group"> 
	<select id="grup" class="form-control rounded-pill" name="grup"require> 
		<option value="0">Pilih Grup User</option> 
		<option value="1">Admin</option> 
		<option value="2">User</option> 
	</select> 
</div> 
<input type="submit" class="btn btn-success" name="submit" value="Tambah"><!--berfungsi untuk menambahkan sebuah button-->
</form><hr> 
<div class="text-center"> 
	<a class="small" href="index">Kembali</a> 
</div>
</div>
</div>
</div>
</body>
</html>
