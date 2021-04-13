<div class='container'>
		<header class='text-center'>
			 <font color='#1E90FF' size="6" >Tambah User</font>
		</header>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/sb-admin-2.css">
</br>
<form action ="<?= base_url('Mahasiswa/input') ?>"method='post'>
<div class="form-group">
	<label for="username">Username</label>
	<input type="text" class="form-control form-control-user"
id="username" name="username" require>
</div>
<div class="form-group">
	<label for="username">Password</label>
<input type="password" class="form-control form-control-user" id="password" name="password"  require>
</div>
<div class="form-group">
	<label for="username">Pilih Grup User</label>
<select id="grup" class="form-control form-control-user" id="grup" name="grup"
require>
<option value="0">Pilih Grup User</option>
<option value="1">Admin</option>
<option value="2">User</option>
</select>
</div>
<input type="submit" class="btn btn-success btn-icon-split"
name="submit" value="Tambah"> &nbsp &nbsp
<a class="big" href="index">Kembali</a>
</form><hr>

</div></div></div></div>