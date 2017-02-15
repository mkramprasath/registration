<?php include 'database.php';?>	
<?php
 

 
// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$password=$_POST['password'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$mobile_number=$_POST['mobile_number'];
 
//Execute the query
 
mysqli_query($connect,"INSERT INTO employee(first_name,last_name,password,email,dob,mobile_number)
				VALUES('$first_name','$last_name','$password','$email','$dob','$mobile_number')");
				
				
				
				if(mysqli_affected_rows($connect) > 0){
	echo "<p>Employee Added</p>";
	echo "<a href=\"add.php\">log in</a>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}
				?>
				
				