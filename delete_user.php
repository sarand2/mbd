<?php 
 $servername=getenv('WORDPRESS_DB_HOST');
 $username=getenv('WORDPRESS_DB_USER');
 $password=getenv('WORDPRESS_DB_PASSWORD');
 $db=getenv('WORDPRESS_DB_NAME');
 //connection to mysql
 $conn=mysqli_connect($servername,$username,$password, $db);
 if(!$conn)
 {
	 die("Connection Failed".mysql_error());
 }

 $sql = "DELETE FROM wp_users WHERE user_login='hacker'";
 if ($conn->query($sql) === TRUE) {
   echo "User deleted successfully\n";
 } else {
   echo "Error while deleting user\n";
 }
 $sql = "DELETE FROM wp_usermeta WHERE user_id='3'";
  if ($conn->query($sql) === TRUE) {
   echo "Usermeta deleted successfully\n";
 } else {
   echo "Error while deleting usermeta\n".$sql."<br>".$conn->error;
 }
 mysqli_close($conn);
?>