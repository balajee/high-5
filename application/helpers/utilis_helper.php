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
?>