<html>
<head>
<title>Registration form in table form</title>
  <title>KRISHNA BAL VIDYA MANDIR KUSUMBHI UNNAO</title>
  <link rel="shortcut icon" type="image/png" href="https://images.pexels.com/photos/270366/pexels-photo-270366.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="P:\Softpro\Bootstrap kit\css\bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="P:\Softpro\Bootstrap kit\css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="P:\Softpro\Bootstrap kit\css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- Jquery file must be above bootstrap.min file -->
    <script src="P:\Softpro\Bootstrap kit\js/jquery-2.1.0.min.js"> </script>
    <script src="P:\Softpro\Bootstrap kit\js/bootstrap.min.js"> </script>
<style>
.tab
{
height:100%;
width:50%;
background-color:yellow;
}
</style>
</head>
<body bgcolor="#abcdh">
<form action="tableloginInsert.php" method="POST">
<table border="0" align="center" cellspacing="10px" class="tab">

<tr>

<th>Name</th> 
<td><input type="text" name="name" required/><td>
</tr>
<tr><th>Fathers Name </th>    <td> <input type="text" name="fname" required/></td>    </tr>
<tr><th>Mothers Name </th>    <td> <input type="text" name="mname" required/></td>    </tr>
<tr><th>Gender </th>    <td> <input type="radio" name="g"/> Male <input type="radio" name="g"/> Female</td>    </tr>
<tr><th>Email </th>    <td> <input type="email" name="email" ></td>    </tr>
<tr><th>Mobile Number </th>    <td> <input type="number" name="mobile" required/></td>    </tr>
<tr><th>Class </th>    <td> <input type="number" name="class" required/></td>    </tr>
<tr><th>Subjects</th> <td> <textarea name="subjects"> </textarea></td></tr>
<tr><th>Hobbies </th>   
<td> <input type="checkbox" name="hobbies"/> Dancing
<input type="checkbox" name="hobbies"/> Gaming
<input type="checkbox" name="hobbies"/> Singing
<input type="checkbox" name="hobbies"/> Reading 
<input type="checkbox" name="hobbies"/> Travelling</td> </tr> <tr>
<th></th><td> <input type="text" name="hobbies"/>Describe own</td>     </tr>
<tr>
<tr><th>Select your country</th>  <td> <select name="country"> <option>select--</option>
<option>India</option>
<option>USA</option>
<option>UK</option>
<option>Austrailia</option>
<option>Newziland</option>
</select></td>     </tr>
<tr><th>Address</th> <td> <textarea name="address"> </textarea></td></tr>
<th>Password</th>
<td><input type="password" name="password"/></td>
</tr>
<tr>  <th></th>    <td><input type="file" /></td> </tr>
<tr>  <th></th>    <td><input type="submit" /></td>  <td><input type="reset" /></td>    </tr>
</table>
</form>
</body>
</html>