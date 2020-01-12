<?php
$servername="sql313.epizy.com";
$username="epiz_24212864";
$password="DuMmgIBZMLPoYGR";
$dbname="epiz_24212864_employee";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "Connection done";
}
else
{
	//echo "Connection failed";  
	//or use to see error funtion of php
	
	die ("Connection failed beacuase ".mysqli_connect_error() );
	
	
}

?>