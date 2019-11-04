<?php
	$path = $_GET['q'];
	header("Content-Type: application/force-download");
	header('Content-Transfer-Encoding: Binary');
	header("Content-Disposition: attachment; filename=f2f.apk");
	readfile($path."/f2f.apk");
?>
