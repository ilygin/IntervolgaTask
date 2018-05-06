<?php
	require 'connection.php';
	$id = $_GET['id'];
	$query = "DELETE FROM countries WHERE id=$id";
	$result = mysqli_query($link, $query);
	header("Location:index.php");
?>