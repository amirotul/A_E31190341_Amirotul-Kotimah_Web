<?php
class Grup extends CI_Controller {//berfungsi untuk membuat class Grup
	public function __construct(){
		parent::__construct();//berfungsi untuk menjalankan file pertama kali ketika di panggil
		$this -> load -> model('Grup_model');//berfungsi untuk memanggil file Grup_model
	}
	public function index(){//berfungsi untuk membuat function index
		$data['user'] = $this ->Grup_model -> getAll() -> result();
		//berfungsi untuk memanggil data dari database melalui file Grup_model
		$this -> template -> views('crud/home_grup',$data);
		//berfungsi untuk menampilkan view crud/home_grup
	}
	public function tambah()//berfungsi untuk membuat function tambah
	{
		$this -> template -> views('crud/tambah_grup');
		//berfungsi untuk menampilkan view crud/tambah_grup
	}
	public function input()//berfungsi untuk membuat function input
	{
		$id_grup = $this -> input -> post('id_grup');//berfungsi untuk memanggil data pada field id_grup
		$grup = $this -> input -> post ('grup');//berfungsi untuk memanggil data pada field grup
	
		$data = array(
			'id_grup' => $id_grup,
			'grup' => $grup
		);
		$this -> Grup_model -> input_data($data, 'tm_grup');//berfungsi untuk menambah data pada tabel tm_user 
		redirect('Grup');//berfungsi untuk kembali ke tampilan home_grup
	}
	public function edit($id){//berfungsi untuk membuat function edit
	$where = array('id_grup'=>$id);//berfungsi untuk mencari data berdasarkan id 
	$data['user'] = $this -> Grup_model -> edit_data ($where, 'tm_grup') -> result ();//berfungsi untuk menampilkan data pada tabel tm_user
	$this -> template -> views ('crud/edit_grup', $data);//berfungsi untuk menampilkan view crud/edit_grup
	}
	public function update() {//berfungsi untuk membuat function update
		$id_grup = $this -> input ->post('id_grup');//berfungsi untuk memanggil data pada field id_grup
		$grup = $this -> input ->post('grup');//berfungsi untuk memanggil data pada field grup

		$data = array(
			'id_grup' => $id_grup,
			'grup' => $grup
		);
		$where = array  (
			'id_grup' => $id_grup);

		$this -> Grup_model -> update_data($where, $data, 'tm_grup');//berfungsi untuk mengupdate data pada tabel tm_user 
		redirect ('Grup');//berfungsi untuk kembali ke tampilan home_grup
	}
	public function hapus ($id){//berfungsi untuk membuat function hapus
		$where = array ('id_grup' => $id);//berfungsi untuk mencari data berdasarkan id 
		$this -> Grup_model -> hapus_data($where, 'tm_grup');//berfungsi untuk menghapus data pada tabel tm_user 
		redirect ('Grup');//berfungsi untuk kembali ke tampilan home_grup
	}
}
?>
