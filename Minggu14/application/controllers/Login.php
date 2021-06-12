<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this -> load -> model ('Mahasiswa_model');
	}
	public function index(){
		$this -> load -> view('crud/login');
	}
	public function cek_log(){
		$username = $this -> input -> post ('username');
		$password = $this -> input -> post ('password');
		$cek = $this -> Mahasiswa_model -> login ($username,$password,'tm_user')->result();
		if($cek != FALSE){
			foreach ($cek as $row) {
				$user = $row -> username;
				$grup = $row -> grup;
			}
			$this -> session -> set_userdata('session_user', $user);
			$this -> session -> set_userdata('session_grup', $grup);
			redirect ('Mahasiswa');
			echo "succes";
		
		}else{
			$this -> load -> view('crud/login');
		}

	}
}
?>