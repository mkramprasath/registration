
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<style>
 form {
        text-align: center;
    }
	
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 9px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}


body {
    background-image: url("2.jpg");
	 background-repeat: no-repeat;
}
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid yellow;
    border-radius: 4px;
}
 h3 {
    color: white;
    font-family: calibri;
    font-size: 200%;
	text-shadow: 1px 1px 2px blue, 0 0 25px blue, 0 0 5px yellow;

}
 h4 {
    color: white;
    font-family: calibri;
    font-size: 100%;
	text-shadow: 1px 1px 2px blue, 0 0 25px blue, 0 0 5px yellow;

}
</style> 
<title>Add Employee</title>
</head>

 <h3><center> REGISTRATION PAGE </center> </h3>

<form method="post" align="center" action="process.php">
<table width="450px">
<tr>
<td><h4 style="color:white;">First Name:</h4></td>
<td>
<input type="text" name="first_name" placeholder="FirstName" /><br><br>
</td>
</tr>


<tr>
<td><h4 style="color:white;">
Last Name:
</h4>
</td>
<td>
<input type="text" name="last_name" placeholder="LastName" /><br><br>
</td>
</tr>


<tr>
<td><h4 style="color:white;">
Password:</h4>
</td>
<td>
<input type="password" name="password" /><br><br>
</td>
</tr>


<tr>
<td><h4 style="color:white;">
Email:</h4>
</td>
<td>
<input type="text" name="email" placeholder="abc@example.com" /><br><br>
</td>
</tr>


<tr>
<td><h4 style="color:white;">
DOB:</h4>
</td>
<td>
<input type="date" name="dob" /><br><br>
</td>
</tr>


<tr>
<td><h4 style="color:white;">
Mobile Number:</h4>
</td>
<td>
<input type="number" name="mobile_number" placeholder="MobileNumber" /> <br><br>
</td>
</tr>


<tr>
<td>
<input type="submit" class="button" value="Create"><br><br>

</td>
</tr>
</table>
</form>

 
 
 <?php include 'footer.php';?>
</body>
</html>