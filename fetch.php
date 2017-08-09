<html>
<head>
<title>START TRAVELLING</title>
<style type="text/css">
	body{font-size:20pt;text-align:center;font-family:gabriola;color:black;background-image:url("bc.png")}
	h1{font-size:25pt;font-family:gabriola;font-style:bold;text-align:center;background:skyblue;color:blue;border:thick solid black;}
	p{text-incident:0.5in;margin-left:50px;margin-right:50px;}
	
	h2{font-size:20pt;font-family:gabriola;font-style:bold;text-align:center;color:blue;}
	a:link{color:blue;font-size:20pt;font-family:gabriola;font-style:bold;}
	a:hover{color:green;text-decoration:underline;font-size:20pt;font-family:gabriola;font-style:bold;}
	table{text-align:center;background:skyblue;color:blue;font-size:20pt;border:thick dotted blue;font-family:gabriola;}
</style>
<link rel="icon" href="k.png" type="image/x-icon">
</head>
<body>
<?php
	$or=$_POST['n1'];
	$dest=$_POST['n2'];
	$type=$_POST['n3'];
	$dc=mysql_connect("localhost","root","");
	if($dc>0)
	mysql_select_db("clsdb");
	$q="select *from trsp where Org = '$or'and Dest = '$dest'and Type = '$type'";
	
	$s=mysql_query($q);

	
	if($r=mysql_fetch_array($s))
	{
		echo "<h2>ORIGIN:</h2>".$r[0];
		echo "<h2>DESTINATION:</h2>".$r[1];
		echo "<h2>TYPE OF TRANSPORT:</h2>".$r[2];
		echo "<h2>COST(Approx.):</h2>".$r[3];
	}

	else echo "<h1>DATA IS NOT AVAILABLE!!!";
	mysql_close();
?>
<a href="fetch.html"><h5 align="center">Go Back</h5></a>
</body>
</html>