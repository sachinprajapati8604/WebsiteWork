<html>
<head>
<title>Registration form in table form</title>
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
<tr><th>Gender </th>    <td> <input type="radio" name="g"/> Male</td>            <td> <input type="radio" name="g"/> Female</td>    </tr>
<tr><th>Email </th>    <td> <input type="email" name="email" required/></td>    </tr>
<tr><th>Mobile Number </th>    <td> <input type="number" name="mobile"  required/></td>    </tr>
<tr><th>Hobbies </th>   
<td> <input type="checkbox" name="hobbies"/> Dancing</td> 
<td> <input type="checkbox" name="hobbies"/> Gaming</td> 
<td> <input type="checkbox" name="hobbies"/> Singing</td> 
<td> <input type="checkbox" name="hobbies"/> Reading</td> 
<td> <input type="checkbox" name="hobbies"/> Travelling</td> </tr> <tr>
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
<tr>  <th></th>    <td><input type="file" class="image"/></td> </tr>
<tr>  <th></th>    <td><input type="submit" /></td>  <td><input type="reset" /></td>    </tr>
</table>
</form>
</body>
</html>