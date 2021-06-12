<!--berfungsi untuk membuat session-->
<?php
 $getUser = $this -> session -> userdata('session_user');
 $getGrup = $this -> session -> userdata('session_grup');
 ?>
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Tables Grup</h6>
    </div>
    <div class="card-body"><div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><!--berfungsi untuk membuat tabel-->
        <thead>
          <tr>
            <th>Id</th>
            <th>Grup</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Grup</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          $no = 1;
          foreach ($user as $baris) { //berfungsi untuk melakukan perulangan
            ?>
            <td><?php echo $baris->id_grup; ?></td> <!--berfungsi untuk memanggil data dari field username-->
            <td><?php echo $baris->grup; ?></td><!--berfungsi untuk memanggil data dari field grup-->

            <td>
              <?php
              if($getGrup==1){ //jika user login sebagai admin maka muncul edit dan hapus data
                echo '<a href="'.base_url('Grup/edit/'.$baris->id_grup).'" class="fa fa-edit"></a>';
                echo " ";
                echo '<a href="'.base_url('Grup/hapus/'.$baris->id_grup).'" class="fa fa-times"></a>';
              }
              ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>  
      <!--berfungsi untuk berpindah ke tampilan tambah_mahasiswa-->
      <a href="<?php echo base_url('Grup/tambah')?>" class="btn btn-success btn-icon-split">
      <!--berfungsi untuk membuat tombol Tambah Data-->
      <span class="text">Tambah Data</span></a>
    </div>
  </div>
  </div>
</div>