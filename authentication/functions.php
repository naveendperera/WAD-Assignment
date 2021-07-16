<?php
	include_once ( __DIR__ ."\connection.php");

function check_login()
{
	if(isset($_SESSION['user_id']))
	{
		$con = connection();
		$id = $_SESSION['user_id'];
		$query = "select * from tbl_user where id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			//print_r($user_data);
			return $user_data;
		}
	}

	//redirect to login
//	header("Location: index.php");
//	die;

}


function isLoggedin()
{

	if(isset($_SESSION['user_id']))
	{
		 return true;
	}
	else {
		return false;

	}
 

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}


function create_user($name,$email,$gender,$adress,$province,$pnum,$password,$id) 
{
	$enc_pw = base64_encode($password);
	$sql = "INSERT INTO `tbl_user` ( `name`, `gender`, `address`, `province`, `identy_number`, `phone_number`, `email`, `password`) ".
		"VALUES ('$name','$gender','$adress','$province','$id','$pnum','$email','$enc_pw' );";
		//echo $sql;
	$con = connection();

	if(mysqli_query($con , $sql)){
		mysqli_close($con);
		return true;
	}
	else{
		//echo mysqli_server($con);
		mysqli_close($con);
		return false;
	}
}
 

function check_existingEmail($email)
{
		$con = connection();

		$sql = "SELECT email FROM `tbl_user` WHERE  email = '".$email."'";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			 return true;
		} else {
			return false;
		}
		$con->close();
}

function user_go_login($email,$pw,$remember)
{
		$con = connection();

		$sql = "SELECT id, email,password FROM `tbl_user` WHERE  email = '".$email."'";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$em = $row["email"];
				$id = $row["id"];
				$password = $row["password"]; 
				
				if($pw == base64_decode($password))
				{
					$_SESSION["user_id"] = $id;
					return true;
				}
				else {
					return false;
				}
			  }
		} else {
			return false;
		}
		$con->close();
}

function user_details()
{
	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
	
		$con = connection();

		$sql = "select * from tbl_user where id = '$id' limit 1";
		$result = $con->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				 return $row;
			  }
		} else {
			return null;
		}
		$con->close();
	}
}