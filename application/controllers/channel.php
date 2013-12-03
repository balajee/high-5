<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Channel extends CI_Controller {

	public function index($channel) {
		$this->layout="Yes";
		
		$records = getCategoryResults($channel);

		$data['channel'] = $channel;
		
		$data['records'] = $records;
		
		$this->load->view('channel',$data);
	}

	public function getRecommendation ($cat = null) {
		
		//echo $cat . $_POST['lat'] . $_POST['long'];
		$partner = getNearPartner($cat, $_POST['lat'],$_POST['long']);
		if ($partner!=null) {
			//echo $partner . "<br/>";
			$records = getStudioResults($partner);
			
			if (sizeof($records) > 0) {
				$data['records'] = $records;
			}
			$data['uniqueKeywords'] = "";
			$this->layout="No";
			$this->load->view('surrogate',$data);
		}
	}
}