<?php
	$or=$_POST['n1'];
	$dest=$_POST['n2'];
	$type=$_POST['n3'];
	$cost=$_POST['n4'];
	$dc=mysql_connect("localhost","root","");
	if($dc>0)
	mysql_select_db("clsdb");
	$q="insert into trsp values('$or','$dest','$type','$cost')";
	$s=mysql_query($q);
	if($s>0)
	echo"<h1>Inserted Successfully";
	mysql_close();
?>