﻿<?php
	session_start();
	include('../connect.php');
	$shd=$_GET['shd'];
	
	$sql="UPDATE `dondathang` SET `NGAYCHUYENHANG`=CURRENT_TIMESTAMP() WHERE `SOHOADON`='$shd'";
	$conn->query($sql);
	$conn->close();
	
	echo $sql;
	$URL = '../quantri.php#ddh';
	header("Location: $URL");
?>