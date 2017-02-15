<?php
	$var='';
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
 form {
        text-align: center;
    }
	input[type=text] 
	{
    width: 70%;
	height: 10% 
	padding: 15px 5px;
    margin: 2px 2;  
}	
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 22px;
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

.button:hover {
    background-color: #4CAF50;
    color: white;
	 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

h3 {
    color: white;
    font-family: calibri;
    font-size: 200%;
	text-shadow: 1px 1px 2px blue, 0 0 25px blue, 0 0 5px yellow;

}
</style>
</head>
<body style="background-color:skyblue;">
	<h3><center> UPDATE STATUS PAGE </center> </h3>
	
		<form method="POST" align="center" action="page4.php" enctype="multipart/form_data">
		<table width="450px">
		
		<tr>
		<td><h4 style="color:white;">UPDATE STATUS:</h4></td>
		 <td>
		 <textarea name="first_name"  maxlength="1000" cols="25" rows="6">
		 </textarea>
		 <br><br>
		 </td>
		</tr>
		
		
		
		<td>
		<input type="submit" class="button" name="butSubmit" value="UPDATE"/><br><br>
		</td>
		</tr>
				
		
		</table>
		</form>
		
		<?php include 'footer.php';?>
</body>
</html>
<?php
		if(isset($_POST['butSubmit'])){
			$var .=$_POST['first_name'] . '<br>' . date('l jS \of F Y h:i:s A	') . '<br>';
			/*
			echo $_POST['first_name'];
			echo '<br />';
			echo date('l jS \of F Y h:i:s A	');
			echo "<br>";
			*/
			echo $var;
		}
?>

