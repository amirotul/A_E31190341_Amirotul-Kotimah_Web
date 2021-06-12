<?php

class Mahasiswa_model extends CI_Model {

public function getAll()
{
	$this -> db -> select('*');// berfungsi untuk mengambil data dari database
	$this -> db -> from('tm_user');//berfungsi untuk mengambil data dari tabel user
	$this -> db -> join('tm_grup', 'tm_user.grup = tm_grup.id_grup');
	// berfungsi untuk melakukan join tabel tm_user dengan tm_grup
	$query = $this -> db -> get();//berfungsi sebagai eksekusi query 
	return $query;// berfungsi untuk  mengembalikan nilai $query
}
public function input_data($data, $table)
{
	$this -> db -> insert($table, $data);// berfungsi untuk menambahkan data pada database

}
public function edit_data($where, $table)
{
	return $this -> db -> get_where($table, $where);
}
public function update_data($where, $data, $table)
{
	$this -> db -> where ($where);
	$this -> db -> update ($table, $data);
}
public function hapus_data ($where, $table){
	$this -> db -> where($where);
	$this -> db -> delete($table);
}
function login($user,$pass,$table){
	$this -> db -> select ('*');
	$this -> db -> from ('tm_user');
	$this -> db -> where ('username',$user);
	$this -> db -> where ('password',$pass);
	$query = $this -> db -> get ();
	return $query;
}
}
?>