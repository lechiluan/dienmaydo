<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://makjgcvtgbfrxg:2a8b99e1f1bece45e7ffcb845684aefae40e4076b876974334bffdedc0f94179@ec2-44-199-86-61.compute-1.amazonaws.com:5432/dajuspnve8lvl7");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	echo 'connected';
    if (!$Connect) {
        die("Connection failed");
    }
?>
