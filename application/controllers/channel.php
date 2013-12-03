<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Channel extends CI_Controller {

	public function index($channel) {
		$this->layout="Yes";
		
		$records = getCategoryResults($channel);
		
		$data['records'] = $records;
		
		$this->load->view('channel',$data);
	}

	public function getRecommendation ($val = null) {
		$initKeyword = "";
		if ($val=="") {
		
			$nearBy = getNearBy($_POST['lat'],$_POST['long']);
			$data['nearBy'] = $nearBy;
			
			
			if (sizeof($nearBy)>0) {
				// print_r($nearBy);
				
				$keywords = array();
				
				if (isset($nearBy->searchResults)) {
				
					foreach ($nearBy->searchResults as $results) {
						
						$keywords[] =  $results->fields->group_sic_code_name ;
					}
					$uniqueKeywords = "";
					if (sizeof($keywords)>0) {
						$uniqueKeywords = getUniqueVal($keywords);
					}
					
					if (sizeof($uniqueKeywords)>0) {
						$initKeyword = reset($uniqueKeywords);
					}
					
					$data['uniqueKeywords'] = $uniqueKeywords;
				}
				
				
				
			}
		
		} else {
			$initKeyword = $val;
		}
		
		$initKeyword = str_replace("(all)", "", $initKeyword);
		
		if ($initKeyword!="") {
			$records = getSearchResults($initKeyword);
			if (sizeof($records) > 0) $data['records'] = $records;
		}
		
		
		$this->layout="No";
		$this->load->view('surrogate',$data);
	}
}