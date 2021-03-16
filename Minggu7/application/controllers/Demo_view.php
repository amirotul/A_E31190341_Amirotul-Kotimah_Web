<?php
class Demo_view extends CI_Controller {
	public function index () {
		$this-> load ->view ('Kode2/headerview');
		$this-> load ->view ('Kode2/contentview');
		$this-> load ->view ('Kode2/footerview');
	}
}
?>