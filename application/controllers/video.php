<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index($videoId) {
		$this->layout="Yes";
		$output = getVideo($videoId);

		if(!isset($output->items[0]->id)) {
			header("Location: /");
			exit;
		}
		$this->load->view('video', array("video" => $output->items[0], "related" => $output->items[0]->related));
	}
}
