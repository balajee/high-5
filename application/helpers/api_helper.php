<?php
	
	function toAscii($str, $delimiter='-') {
		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
		return $clean;
	}
	
	function getUserLocation () {

		$ci=& get_instance();
		
		$key = $ci->config->item('ip2location_key');
		
		$user_ip = $ci->input->ip_address();
		if ( $user_ip=="::1") {
		     $user_ip = "121.241.128.145";
		}
		
		$api_url = 'http://api.ipinfodb.com/v3/ip-city/?key='.$key.'&ip='.$user_ip.'&format=json';
		
		// $api_url = 'http://api.ipinfodb.com/v3/ip-city/?key='.$key.'&ip=121.241.128.145&format=json';
		
		// echo $api_url;
		try {	
			$geocode=file_get_contents($api_url);
			$output= json_decode($geocode);
			
			if ($output) {
				$data['user_cityName'] = $output->cityName;
				$data['user_regionName'] = $output->regionName;
				$data['user_countryName'] = $output->countryName;
				$data['user_latitude'] = $output->latitude;
				$data['user_longitude'] = $output->longitude;
				//if ( $ci->input->ip_address()=="::1") {
				//	$data['timeZone'] = "0:00";
				//} else {
					$data['timeZone'] = $output->timeZone;
				//}
				return $data;
			}

		} catch (Exception $e) {
		}
	}
	
	function getNearBy ($lat, $long) {

		$ci=& get_instance();
		
		$key = $ci->config->item('ip2location_key');
		
		// $api_url = 'http://api.ipinfodb.com/v3/ip-city/?key='.$key.'&ip='.$ci->input->ip_address().'&format=json';
		
		$api_url = 'http://www.mapquestapi.com/search/v2/search?key=Dmjtd%7Clu612hurng,as=o5-50zah&maxMatches=10&shapePoints='.$lat.','.$long;
		
		try {	
			$geocode=file_get_contents($api_url);
			$output= json_decode($geocode);
			
			if ($output) {
				return $output;
			}

		} catch (Exception $e) {
		}
	}
	

	
	function getCategoryResults ($category) {
		
		$ci=& get_instance();
		
		$apiurl = "http://api.5min.com/category/".$category."/videos.json?thumbnail_sizes=true";
		
		try {	
			$geocode=file_get_contents($apiurl);
			$output= json_decode($geocode,true);
			
			
			if ($output) {
				return $output;
			}
			
			
		} catch (Exception $e) {
			echo $e;
		}
	}
	
	function getSearchResults ($search) {
		
		$ci=& get_instance();
		
		$apiurl = "http://api.5min.com/search/".urlencode($search)."/videos.json?num_of_videos=3&thumbnail_sizes=true&country=US";
		
		try {	
			$geocode=file_get_contents($apiurl);
			$output= json_decode($geocode,true);
			
			
			if ($output) {
				return $output;
			}
			
			
		} catch (Exception $e) {
			echo $e;
		}
	}
	
	function getStudioResults ($studio) {
		
		$ci=& get_instance();
		
		$apiurl = "http://api.5min.com/studio/".urlencode($studio)."/videos.json?&thumbnail_sizes=true&num_of_videos=6";
		
		try {	
			$geocode=file_get_contents($apiurl);
			$output= json_decode($geocode,true);
			
			
			if ($output) {
				return $output;
			}
			
			
		} catch (Exception $e) {
			echo $e;
		}
	}
	
	
	
	function aasort (&$array, $key) {
	    $sorter=array();
	    $ret=array();
	    reset($array);
	    foreach ($array as $ii => $va) {
	        $sorter[$ii]=$va[$key];
	    }
	    asort($sorter);
	    foreach ($sorter as $ii => $va) {
	        $ret[$ii]=$array[$ii];
	    }
	    $array=$ret;
	}
	
	function findDistance($lat1, $lon1, $lat2, $lon2, $unit = "") { 
	
	  $theta = $lon1 - $lon2; 
	  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
	  $dist = acos($dist); 
	  $dist = rad2deg($dist); 
	  $miles = $dist * 60 * 1.1515;
	  $unit = strtoupper($unit);
	
		if ($unit == "K") {
	    	return ($miles * 1.609344); 
	  	} else if ($unit == "N") {
	      	return ($miles * 0.8684);
	  	} else {
	        return $miles;
		}
	}
	
	function geoip_encode($ip) {
		list( $w, $x, $y, $z ) = explode('.', trim($ip));
		return( (16777216 * $w) + (65536 * $x) + (256 * $y) + $z ); 
	}
	
	function time_elapsed_string($ptime) {
	    $etime = time() - $ptime;
	
	    if ($etime < 1)
	    {
	        return '0 seconds';
	    }
	
	    $a = array( 12 * 30 * 24 * 60 * 60  =>  'year',
	                30 * 24 * 60 * 60       =>  'month',
	                24 * 60 * 60            =>  'day',
	                60 * 60                 =>  'hour',
	                60                      =>  'minute',
	                1                       =>  'second'
	                );
	
	    foreach ($a as $secs => $str)
	    {
	        $d = $etime / $secs;
	        if ($d >= 1)
	        {
	            $r = round($d);
	            return $r . ' ' . $str . ($r > 1 ? 's' : '') . ' ago';
	        }
	    }
	}
	
	function getVideo($videoId) {
		if(is_numeric($videoId)) {		
			$url = "http://api.5min.com/video/$videoId/info.json?num_related_return=3";
			$response = file_get_contents($url);
			$output = json_decode($response);
			if(isset($output->items[0])) {
				return $output;
			} else {
				return null;
			}
		}
		return null;
	}	
?>