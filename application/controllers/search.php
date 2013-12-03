<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index() {
		$this->layout="Yes";
		$this->load->view('search');
	}
}