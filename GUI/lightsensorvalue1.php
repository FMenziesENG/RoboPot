<?php
	$myfile = fopen("lightsensor1.txt", "r") or die("unable to open file!");
	$value = fread($myfile,filesize("lightsensor1.txt"));
	echo $value;
	fclose($myfile);
?>