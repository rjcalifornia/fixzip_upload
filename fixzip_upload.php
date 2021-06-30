<?php
/**
 * @package FixZIP Upload
 */
/*
Plugin Name: FixZIP Upload
Plugin URI: https://github.com/rjcalifornia/fixzip_upload
Description: Simple plugin for fixing ZIP uploads in the Gutenberg Editor
Version: 1.0
Author: rjcalifornia
Author URI: https://rodolfohernan20.blogspot.com.com/
License: GPLv2 or later
*/

function add_zip_type_uploads( $mimeTypes ) {
	
	$mimeTypes['zip'] = 'application/x-zip-compressed';
	$mimeTypes['7zip'] = 'application/x-7z-compressed'; 
	$mimeTypes['7z'] = 'application/x-7z-compressed'; 

return $mimeTypes;
}
add_filter( 'upload_mimes', 'add_zip_type_uploads' );