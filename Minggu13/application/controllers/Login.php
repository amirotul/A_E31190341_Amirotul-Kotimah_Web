<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller { //berfungsi untuk membuat class Login
	function __construct(){
		parent::__construct(); //berfungsi untuk menjalankan file pertama kali ketika di panggil
		$this -> load -> model ('Mahasiswa_model'); //berfungsi untuk memanggil file Mahasiswa_model
	}
	public function index(){ //berfungsi untuk membuat function index
		$this -> load -> view('crud/login'); //berfungsi untuk menampilkan view crud/login
	}
	public function cek_log(){ //berfungsi untuk membuat function cek_log
		$username = $this -> input -> post ('username'); //berfungsi untuk mengirim data ke field username
		$password = $this -> input -> post ('password'); //berfungsi untuk mengirim data ke field password

		//berfungsi untuk mengecek data pada database
		$cek = $this -> Mahasiswa_model -> login ($username,$password,'tm_user')->result();

		if($cek != FALSE){ 
			foreach ($cek as $row) {
				$user = $row -> username;
				$grup = $row -> grup;
			}
			$this -> session -> set_userdata('session_user', $user); //berfungsi untuk membuat session user
			$this -> session -> set_userdata('session_grup', $grup); //berfungsi untuk membuat session grup
			redirect ('Mahasiswa'); //jika login berhasil maka akan tampilan home_mahasiswa

		}else{
			$this -> load -> view('crud/login'); //berfungsi jika gagal login maka akan menampilkan view crud/login
			//berfungsi untuk menampilkan pesan Gagal login
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";

		}
	}
	public function logout() //berfungsi untuk membuat class logout
    {
        $this->session->userdata('session_user'); //berfungsi untuk membuat session_user
        $this->session->userdata('session_grup'); //berfungsi untuk membuat session_grup
        session_destroy();
        redirect('Login/cek_log'); //berfungsi untuk memanggil controller Login/cek_log
    }
}
?>