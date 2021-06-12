<?php

class Mahasiswa extends CI_Controller {
	public function __construct(){
		parent::__construct();//berfungsi untuk menjalankan file pertama kali ketika di panggil
		$this -> load -> model('Mahasiswa_model');//berfungsi untuk memanggil file mahasiswa_model
	}
	public function index(){
		$data['user'] = $this ->Mahasiswa_model -> getAll() -> result();
		//berfungsi untuk memanggil data dari database melalui file mahasiswa_model
		$this -> template -> views('crud/home_mahasiswa',$data);
		//berfungsi untuk menampilkan view crud/home_mahasiswa
	}
	public function tambah()
	{
		$this -> template -> views('crud/tambah_mahasiswa');
		//berfungsi untuk menampilkan view crud/tambah_mahasiswa
	}
	public function input()
	{
		$username = $this -> input -> post('username');//berfungsi untuk menambahkan data ke field username
		$password = $this -> input -> post ('pass');//berfungsi untuk menambahkan data ke field password
		$nama = $this -> input -> post ('nama');
		$grup = $this -> input -> post ('grup');//berfungsi untuk menambahkan data ke field grup

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);
		$this -> Mahasiswa_model -> input_data($data, 'tm_user');//berfungsi untuk memproses data 
		redirect('Mahasiswa/index');//berfungsi untuk kembali ke tampilan home_mahasiswa
	}
	public function edit($id){
	$where = array('id'=>$id);
	$data['user'] = $this -> Mahasiswa_model -> edit_data ($where, 'tm_user') -> result ();
	$this -> template -> views ('crud/edit_mahasiswa', $data);
	}
	public function update() {
		$id = $this -> input ->post('id');
		$username = $this -> input ->post('username');
		$password = $this -> input ->post('pass');
		$nama = $this -> input ->post('nama');
		$grup = $this -> input ->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);
		$where = array  (
			'id' => $id);

		$this -> Mahasiswa_model -> update_data($where, $data, 'tm_user');
		redirect ('Mahasiswa');
	}
	public function hapus ($id){
		$where = array ('id' => $id);
		$this -> Mahasiswa_model -> hapus_data($where, 'tm_user');
		redirect ('Mahasiswa/index');
	}
	public function logout()
    {
        $this->session->userdata('session_user');
        $this->session->userdata('session_grup');
        redirect('Login/cek_log');
    }

    public function Api(){//berfungsi untuk membuat function Api
    	$data = $this -> Mahasiswa_model -> getAll();//berfungsi untuk memanggil data dari database melalui file mahasiswa_model
    	echo json_encode($data -> result_array());//befungsi untuk menampilkan data keseluruhan dari database dalam bentuk JSON.
    }
    public function ApiInsert(){//berfungsi untuk membuat funtion ApiInsert
    	$username = $this -> input -> post ('username');//berfungsi untuk memanggil data pada field username
    	$nama = $this -> input -> post ('nama');//berfungsi untuk memanggil data pada field nama
    	$grup = $this -> input -> post ('grup');//berfungsi untuk memanggil data pada field grup
    	$password = $this -> input -> post ('password');//berfungsi untuk memanggil data pada field password

    	$data = array(
    		'username' => $username,
    		'nama' => $nama,
    		'grup' => $grup,
    		'password' => $password
    	);
    	$this -> Mahasiswa_model -> input_data ($data, 'tm_user');//berfungsi untuk menambah data pada tabel user
    	echo json_encode($array);//befungsi untuk menampilkan data keseluruhan dari database dalam bentuk JSON.
    }
    public function ApiDelete(){//berfungsi untuk membuat function ApiDelete
    	if ($this -> input -> post ('username')){//berfungsi untuk memanggil field username
    		$where = array('username' => $this -> input -> post ('username'));//berfungsi untuk memasukkan data
    		if ($this -> Mahasiswa_model -> hapus_data($where, 'tm_user')){//berfungsi untuk menghapus data
    			$array = array('success' => true);//jika username yang diinputkan benar maka proses hapus akan success
    		}else {
    			$array = array('error' => true);//jika username  yang diinputkan salah maka proses hapus akan error
    		}
    		echo json_encode($array);//befungsi untuk menampilkan data keseluruhan dari database dalam bentuk JSON.
    	}
    }
    public function ApiUpdate() {
    	$id = $this -> input ->post('id');
		$username = $this -> input ->post('username');
		$password = $this -> input ->post('pass');
		$nama = $this -> input ->post('nama');
		$grup = $this -> input ->post('grup');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'grup' => $grup
		);
		$where = array  (
			'id' => $id);

		$this -> Mahasiswa_model -> update_data($where, $data, 'tm_user');
		echo json_encode($array);
	}

}
?>
