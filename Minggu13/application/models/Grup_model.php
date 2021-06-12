<?php

class Grup_model extends CI_Model {//berfungsi untuk membuat class Grup_model

public function getAll()//berfungsi untuk membuat function getAll
{
	$this -> db -> select('*');// berfungsi untuk mengambil data dari database
	$this -> db -> from('tm_grup');//berfungsi untuk mengambil data dari tabel tm_user
	$query = $this -> db -> get();//berfungsi sebagai eksekusi query 
	return $query;// berfungsi untuk  mengembalikan nilai $query
}
public function input_data($data, $table)//berfungsi untuk membuat function input_data yang mempunyai variabel $data, $table
{
	$this -> db -> insert($table, $data);//berfungsi untuk menambahkan data pada database

}
public function edit_data($where, $table)//berfungsi untuk membuat function edit_data yang mempunyai variabel $where, $table
{
	return $this -> db -> get_where($table, $where);//berfungsi untuk  mengembalikan nilai 
}
public function update_data($where, $data, $table)//berfungsi untuk membuat function edit_data yang mempunyai variabel $where, $data, $table
{
	$this -> db -> where ($where);// berfungsi untuk memfilter data pada database
	$this -> db -> update ($table, $data);//berfungsi untuk mengupdate data pada database
}
public function hapus_data ($where, $table){//berfungsi untuk membuat function hapus_data yang mempunyai variabel $where, $table
	$this -> db -> where($where);//berfungsi untuk memfilter data pada database
	$this -> db -> delete($table);//berfungsi untuk menghapus data pada database
}
}
?>