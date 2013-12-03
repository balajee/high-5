<?php
	function getUniqueVal ($tag_array) {
		
		return array_unique($tag_array);
		
		// Instantiate the final tag array
		$popular_tags = array();
	
		// Loop through each set of tags
		foreach($tag_array as $tags)
		{
			/*
			 * Separate at the commas to get individual tags and
			 * trim the whitespace from each tag
			 */
			$tags_arr = array_map('trim', explode(',', $tags));
	
			// Loop through each tag
			foreach($tags_arr as $tag)
			{
				/*
				 * If the tag has already been added to the
				 * $popular_tags array, increment its value by 1
				 */
				if(array_key_exists($tag, $popular_tags))
				{
					$popular_tags[$tag] += 1;
				}
	
				/*
				 * Otherwise, add the tag to the array and
				 * set its value to 1
				 */
				else
				{
					$popular_tags[$tag] = 1;
				}
			}
		}
	
		// Sort the tags in the array in descending order
		arsort($popular_tags);
	
		// Return the array
		return $popular_tags;
	}

/* *******      Partner/Studios    ********* */

$prtMap = array();

initPartners();

function initPartners() {
	global $prtMap;

	$newsArray = array();
	$newsArray[0] = new Partner("cnet", "CNET", "42.363766", "-71.079521", "http://on.aol.com/partner/cnet-251736463", "News");
	$newsArray[1] = new Partner("associatedpress", "AP", "40.75332", "-73.99947", "http://on.aol.com/partner/associated-press-516990341", "News");

	$entArray = array();
	$entArray[0] = new Partner("e!", "E! Online", "33.563962", "-112.059585", "http://on.aol.com/partner/e--280071933", "Entertainment");
	$entArray[1] = new Partner("splashnews", "Splash News", "40.728381", "-73.993696", "http://on.aol.com/partner/splashnews-246666329", "Entertainment");

	$fashArray = array();
	$fashArray[0] = new Partner("elle", "ELLE", "40.766875", "-73.983675", "http://on.aol.com/partner/elle-517835012", "Fashion");
	$fashArray[1] = new Partner("birchbox", "BIRCHBOX", "40.744103", "-73.984855", "http://on.aol.com/partner/birchbox-517685889", "Fashion");
	$fashArray[2] = new Partner("lucky", "Lucky Magazine", "40.756086", "-73.985945", "http://on.aol.com/partner/lucky-69785807", "Fashion");

	$busArray = array();
	$busArray[0] = new Partner("wsjlive", "The Wakk Street Journal", "29.984188", "-95.335437", "http://on.aol.com/partner/wsjlive-517302109", "Business");

	$techArray = array();
	$techArray[0] = new Partner("mashable", "Mashable", "40.740494", "-73.986734", "http://on.aol.com/partner/mashable-517326556", "Tech");

	$prtMap["news"] = $newsArray;
	$prtMap["entertainment"] = $entArray;
	$prtMap["fashion"] = $fashArray;
	$prtMap["business"] = $busArray;
	$prtMap["tech"] = $techArray;

	//print_r($prtMap);
}

function getPartners($cat) {
	$partner = null;
	global $prtMap;
	if(array_key_exists($cat, $prtMap)) {
		$partner = $prtMap[$cat];
	}
	return $partner;
}

function getNearPartner($cat,$ulat,$ulong){
	$distMap = array();
	$catPartners = getPartners($cat);
	if($catPartners==null) {
		return null;
	}
	foreach($catPartners as $cp){
		$pLat = $cp->lat;
		$pLong = $cp->long;
		$dist = findDistance($ulat, $ulong, $pLat, $pLong);
		$distMap[$cp->id] = $dist;
	}
    asort($distMap);
    //print_r($distMap);
	$keys = array_keys($distMap);
    return $keys[0];
}

class Partner
{
	public $id;
	public $name;
	public $lat;
	public $long;
	public $url;
	public $cat;

	public function __construct($pid, $pname, $plat, $plong, $purl, $pcat) {
		//print $pid . "<br/>";
		$this->id = $pid;
		$this->name = $pname;
		$this->lat = $plat;
		$this->long = $plong;
		$this->url = $purl;
		$this->cat = $pcat;
	}
}

?>