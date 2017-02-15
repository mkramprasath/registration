<?php
    $con=mysqli_connect("127.0.0.1", "root", "", "mydatabase");
    if (mysqli_connect_errno($con))
    {
        echo "MySql Error: " . mysqli_connect_error();
        }

    $query=mysqli_query($con,"SELECT * FROM employee WHERE first_name='$_POST[first_name]' && password='$_POST[password]'");
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);

    if ($count==1)
    {
        session_start();
        $_SESSION['first_name'] = $_POST['first_name'];
        $_SESSION['password'] = $_POST['password'];
        header("location: page3.php");
        }
    else
    {
        echo "Invalid username or password";
        header("location: index.php");
		}   

    mysqli_close($con);
    ?>