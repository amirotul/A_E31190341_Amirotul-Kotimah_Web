<?php
class Demo_view2 extends Ci_Controller {
	public function _construct () {
		parent :: _construct () ;
		$this->load->helper ('url');
	}
	public function index () {
		$this->load->view ('kode3/demoview');
	}
}
?>