<?php 
		setcookie("user", "Harry Poter" , time()+33600);
		session_start();
	 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cookies</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-4">
				<h2>Cookies:</h2>	
			<h2>User: <?php  $_COOKIE["user"] ?></h2>
				










			</div>
			<div class="col-4">Some Content</div>
			<div class="col-4">Some Content</div>
		</div>
	</div>
	
</body> 
</html>