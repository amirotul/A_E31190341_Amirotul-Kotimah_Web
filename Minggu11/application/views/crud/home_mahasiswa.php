<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h1 class="m-0 font-weight-bold text-primary text-center">Data Tables User</h1></div>
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/sb-admin-2.css">
		<div class="card-body"> <div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="50%" border="0" cellpadding="0" cellspacing="0" >
			<thead>
				<tr><th>No</th>
					<th>Username</th>
					<th>Nama</th>
					<th>Grup</th></tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach($user as $baris){
					?>
					<tr><td><?php echo $no++; ?></td>
					<td><?php echo $baris->username; ?></td>
					<td><?php echo $baris->password; ?></td>
					<td><?php echo $baris->grup; ?></td>
				</tr>
				<?php } ?>
				
			</tbody>	
			</table>
		</div>
	</div>
</div>

&nbsp &nbsp
<a href="<?php echo base_url('Mahasiswa/tambah')?>" class="btn btn-success btn-icon-split">
	<span class="text">Tambah Data</span>
</a>
				


