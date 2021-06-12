<div class="row">
	<div class="col-lg-7">
		<div class="p-5">
			<div class="text-center">
				<h1 class="h4 text-gray-900 mb-4">Edit Grup</h1><!--berfungsi membuat judul kolom-->
			</div><?php foreach($user as $baris){ ?>
				<!--berfungsi untuk meload ke controller Grup/update-->
				<form class="user" action="<?php echo base_url('Grup/update');?>" method="post">
					<div class="form-group">
						<!--berfungsi untuk membuat form input-->
						<input type="hidden" name="id_grup" value="<?php echo $baris->id_grup; ?>">
						<input type="text" class="form-control form-control-user" id="grup" name="grup" placeholder="Name Grup Maximal 10 Character" value="<?php echo $baris->grup; ?>" require>
					</div>
					<!--berfungsi untuk membuat tombol 'Update'-->
					<input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Update">
				</form>
				<?php } ?>
				<hr>
				<!--berfungsi untuk membuat alamat link dengan nama 'Kembali' yang nantinya meload ke controller Grup -->
				<div class="text-center"><a class="small" href="<?php echo base_url('Grup')?>">Kembali</a>
				</div>
			</div>
		</div>
	</div>