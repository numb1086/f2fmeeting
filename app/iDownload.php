<?php
	$file =$_GET['f'];
	header("Content-Type: application/force-download");
	header('Content-Transfer-Encoding: Binary');
	header("Content-Disposition: attachment; filename=$file.zip");
	readfile("ios/$file.zip");
?>
