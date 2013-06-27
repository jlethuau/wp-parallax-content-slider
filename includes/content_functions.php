<?php
/*
 * Description: include supporting functions for WP Parallax Content Slider
 * Licence: GPLv2
 * Contributor: Chun Law
 * Contribution: 	function has_content_image() and get_content_image_urls
 *
*/

	function has_content_image() {
		// match out all image tags in post content
		$output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/', get_the_content() , $matches);
		if(empty($matches [1])){ //Defines a default image
			return false;
		}
		return true;
	}

	function get_content_image_urls(){
		$output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/', get_the_content(), $matches);
		// return array of urls
		return $matches [1];
	}
?>
