<?php
class Demo_view3 extends Ci_Controller {
	public function __construct () {
		parent :: __construct () ;
		$this-> load ->helper ('url');
	}
	public function index () {
		$this-> load ->view ('kode4/demoview');
	}
}
?>