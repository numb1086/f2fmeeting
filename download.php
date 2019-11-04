<?php
	$name = $_GET['q'];
	header("Content-Type: application/force-download");
	header('Content-Transfer-Encoding: Binary');
	header("Content-Disposition: attachment; filename=bg$name");
	readfile("img/$name");
?>
