<html>
<head>
 <h1> example </h1>
 </head>
 <body>
 <form method="POST">
 <textarea name="status"></textarea>
 <input type="submit" name="submit"/>
 </body>
 </html>
 
 <?php
 echo $_POST['status'];
 echo "<br>";
 ?>