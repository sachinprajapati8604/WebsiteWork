<?php
// including function file of connection which is stored as Connection.php in same folder

include("Connection.php");
 
 // creating variable to get data
$feed=$_POST['feedback'];


$query= "INSERT INTO `feedback` VALUES ('$feed')";


$data=mysqli_query($conn,$query);

if($data)
{
	echo "Feedback sumitted Succesfully";
}
else
{
	echo "Error to send ";
}

?>



