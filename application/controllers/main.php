<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		
		$time = date("H");
		
		$category = "Entertainment";
		if ($time < "8") {
			$welcome_msg = "Good Morning!";
			$category = "Fitness";
		} else if ($time >= "8" && $time < "12") {
			$welcome_msg = "Good Morning!";
			$category = "News";
		} else if ($time >= "12" && $time < "17") {
			$welcome_msg = "Good Afternoon!";
			$category = "Food";
		} else if ($time >= "17" && $time < "22") {
			$welcome_msg = "Good Evening!";
			$category = "News";
		} else if ($time >= "22") {
			$welcome_msg = "Good Day!";
			$category = "Entertainment";
		}
		
		$data['welcome_msg'] = $welcome_msg;
		$records = getCategoryResults($category);
		
		$data['records'] = $records;
		
		$this->layout="Yes";
		$this->load->view('main',$data);
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