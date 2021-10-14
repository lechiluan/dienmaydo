<?php
	$Connect = pg_connect("postgres://makjgcvtgbfrxg:2a8b99e1f1bece45e7ffcb845684aefae40e4076b876974334bffdedc0f94179@ec2-44-199-86-61.compute-1.amazonaws.com:5432/dajuspnve8lvl7");
	if(!$Connect)
	{
		die("Could not connect to database");
	}
?>
