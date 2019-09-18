<?php
	$file = fopen("abc.txt", "r");
	$n = fscanf($file, "%d");
	fclose($file);
	$n[0]++;

	$file = fopen("abc.txt", "w");
	fprintf($file, "%d", $n[0]);
	fclose($file);

	print "Total number of views : ".$n[0];
?>