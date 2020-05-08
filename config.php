<html>
	<head>
		<title> Database Connection </title>
	</head>
	<body>
	<?php
	   $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $db = mysql_select_db ('project',$conn) or die("unable to connect to database"); 
	  ?>
	</body>
</html>