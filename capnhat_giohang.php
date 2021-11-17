<?php
session_start();
if(isset($_POST["arrsl"]))
{
	
	$arrsl=array();
	$arrsl=$_POST["arrsl"];
	$giohang=array();
	$giohang=$_SESSION["giohang"];
	$dem=0;
	foreach($giohang as $ma=>$sl)
	{
		$_SESSION["giohang"][$ma]=$arrsl[$dem];
		$dem++;
	}
	header("Location:http:main.php?tem=7");
	
}else
{
	header("Location:http:main.php?tem=7");	
}
?>