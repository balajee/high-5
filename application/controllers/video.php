<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index($videoId) {
		$this->layout="Yes";
		$video = getVideo($videoId);

		if(!isset($video->id)) {
			header("Location: /");
			exit;
		}
		$this->load->view('video', array("video" => $video));
	}
}
