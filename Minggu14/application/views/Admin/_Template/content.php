 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!--berfungsi untuk menampilkan nama user -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo "Selamat Datang ".$this->session->userdata('session_user');?></h1>
          <?php echo @$konten; ?> <!-- untuk menampilkan file yang diekseskusi pada controller-->
			
        </div>
        <!-- /.container-fluid -->

      