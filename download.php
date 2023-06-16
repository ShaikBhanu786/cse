<?php
if(isset($_REQUEST["file"])){
// Get parameters
	$file = urldecode($_REQUEST["file"]); //Decode URL-encodestring
	$filepath = "/home/rgukt/" . $file;
// Process download
	if(file_exists($filepath)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: File Transfer');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('content-Length: ' . filesize($filepath));
		flush(); //flush system output buffer
		readfile($filepath);
		exit;
	}
	}
?>