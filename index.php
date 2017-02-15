<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<style>
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
body {
    background-image: url("2.jpg");
	 background-repeat: no-repeat;
}
h2 {
    color: white;
    font-family: calibri;
    font-size: 200%;
	text-shadow: 1px 1px 2px blue, 0 0 25px blue, 0 0 5px yellow;

}
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid yellow;
    border-radius: 4px;
}
</style>
<div class="container">
  <h2><center>LOGIN PAGE</center></h2>
  <form action="add.php" method="POST">
    <div class="form-group">
      <label for="username"><h4 style="color:white;">UserName:</h4></label>
      <input type="text" class="form-control" name="first_name" placeholder="UserName">
    </div>
    <div class="form-group">
      <label for="pwd"><h4 style="color:white;">Password:</h4></label>
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    
    <input type="submit" class="button" value="Submit"></button>
  </form>
</div>
<center>
<?php include 'footer.php';?>
</center>
</body> 
</html>
