<html>
<head>
<title>Registration Form </title>
</head>  
<body>
<h1 align="center">Registration Form</h1>
<form name="registration" method="post" action="validateForm.php">
<table border="1" cellpadding="8" cellspacing="3" width="500" align="center">
<tr>
<td><label>First Name:<span>*</span></label></td>
<td><input type="text" id="firstName" name="firstName" size="50" /></td>
</tr>
<tr>
<td><label>Last Name:<span>*</span></label></td>
<td><input type="text" id="lastName" name="lastName" size="50" /></td>
</tr>
<tr>
<td><label>Email:<span>*</span></label></td>
<td><input type="text" id="email" name="email" size="50" /></td>
</tr>
<tr>
<td><label>Password:<span>*</span></label></td>
<td><input type="password" id="passid" name="passid" size="12" /></td>
</tr>
<tr>
<td><label>Country:<span>*</span></label></td>
<td><select id="country" name="country">
<option selected="" value="0">select country</option>
<option value="1">Australia</option>
<option value="2">Canada</option>
<option value="3">India</option>
<option value="4">Russia</option>
<option value="5">USA</option>
</select></td>
</tr>
<tr>
<td> <label>Zip Code:<span>*</span></label></td>
<td><input type ="text" id="zipCode" name="zipCode" size="50"/></td>
</tr>
<tr>
<td><label>Gender:<span>*</span></label></td>
<td><input type="radio" id="male" name="gender" value="Male" />Male
<input type="radio" id="female" name="gender" value="Female" />Female</td>
</tr>
<tr>
<td><label>Profile photo:<span>*</span></label></td>
<td><input type="file" name="file" id="file"></td>
</tr>
<tr>
<td align="center"><input type="submit" name="submit" value="Submit" /></td>
</tr>
</table>
</form>


</body>
</html>