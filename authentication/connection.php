<?php



function connection()
{ 
	$servername = "localhost";
$username = "donate_usr";
$password = "8njCONm(WF0)5XF6";
$dbname = "donate_db";

	$con = mysqli_connect($servername,$username,$password,$dbname);


	if(!$con)
	{
	
		die("failed to connect!");
	}	
	return  $con;  

}
