<?php
$username=$_POST['username'];
$password=$_POST['password'];
if(!empty($username) || !empty($password))
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="employee";
	
	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error())
	{
		die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
		
	}
	else
	{
		$SELECT="SELECT username From login Where email=? Limit 1";
		$INSERT="INSERT Into login (username,password) values (?,?)";
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt->bind_result($username);
		$stmt->store_result();
		$rnum=$stmt->num_rows;
		if($rnum==0)
		{
			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("ssssii",$username,$password);
			$stmt->execute();
			echo " New reord inserted succefuly";
		}
		else
		{
		echo "Someone already exit using this email";	
		}
		$stmt->close();
		$conn->close();
		
	}
	else
	{
		echo "All fields are required";
		die();
	}
}
?>