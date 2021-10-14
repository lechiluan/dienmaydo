<?php
	$Connect = mysqli_connect("ec2-44-199-86-61.compute-1.amazonaws.com","5432","makjgcvtgbfrxg","2a8b99e1f1bece45e7ffcb845684aefae40e4076b876974334bffdedc0f94179","dajuspnve8lvl7") or die("Lỗi".mysqli_error($Connect));
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);
