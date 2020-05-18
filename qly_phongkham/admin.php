<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	session_start();
	include('opp.php');
	$db = new Database;
	$db->connect();
	$kq=$db->nhanvien();
	print_r($kq);
	?>

	Xin chào!
</body>
</html>