<?php 
 $servername=getenv('WORDPRESS_DB_HOST');
 $username=getenv('WORDPRESS_DB_USER');
 $password=getenv('WORDPRESS_DB_PASSWORD');
 echo($servername);
 echo($username);
 echo($password);
 //connection to mysql
 $conn=mysqli_connect($servername,$username,$password);
 if(!$conn)
 {
	 die("Connection Failed".mysql_error());
 }
 
 //Create database
 //$sql="CREATE DATABASE lname";//change name to change database
 
 //if( mysqli_query($conn,$sql) )
 //{
//	 echo ("Database create successfully");
 //}
 //else
// {
//	 echo ("Error Creating Database".mysqli_error());
 //}
 mysqli_close($conn);
 ?>
