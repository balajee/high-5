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
	$newsArray[0] = new Partner("cnet", "CNET", "lat", "long", "http://on.aol.com/partner/cnet-251736463", "News");
	$newsArray[1] = new Partner("time", "CNET", "lat", "long", "http://on.aol.com/partner/time-517930617", "News");

	$entArray = array();
	$entArray[0] = new Partner("etonline", "ETonline", "lat", "long", "http://on.aol.com/partner/etonline-517173500", "Entertainment");
	$entArray[1] = new Partner("huffpost-live", "HuffPost Live", "lat", "long", "http://on.aol.com/partner/hp-live-segments-517394847", "Entertainment");

	$fashArray = array();
	$fashArray[0] = new Partner("elle", "ELLE", "lat", "long", "http://on.aol.com/partner/elle-517835012", "Fashion");
	$fashArray[1] = new Partner("popsugar", "POPSUGAR Celebrity", "lat", "long", "http://on.aol.com/partner/popsugar-fashion-271104134", "Fashion");

	$prtMap["News"] = $newsArray;
	$prtMap["Entertainment"] = $entArray;
	$prtMap["Fashion"] = $fashArray;

	//print_r($prtMap);
}

function getPartners($cat) {
	global $prtMap;
	return $prtMap[$cat];
}

//echo "<br/><br/>";
//print_r (getPartners("News"));

// User Current Location
$ulat = "40.689249";
$ulong = "-74.044500";

function getNearPartner($cat,$ulat,$ulong){
	$distMap = array();
	$catPartners = getPartners($cat);
	foreach($catPartners as $cp){
		$pLat = $cp->lat;
		$pLong = $cp->long;
		$dist = findDistance($ulat, $ulong, $pLat, $pLong);
		$distMap[$cp] = $dist;
	}
    asort($distMap);
    //print_r($distMap);
    //return array_keys($distMap)[0];
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