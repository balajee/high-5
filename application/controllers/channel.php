<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Channel extends CI_Controller {

	public function index($channel) {
		$this->layout="Yes";
		
		$records = getCategoryResults($channel);
		
		$data['records'] = $records;
		
		$this->load->view('channel',$data);
	}
}