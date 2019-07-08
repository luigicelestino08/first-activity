<?php
session_start():
$firstname = $_post{ 'firstname' };
$lastname =$_post{'}lastname '};
$age = $_post{'age'}:
$contact = $post ['contact'];
$email = $_post ['email']:
$session ['user']=$firstname:
include_once (;config.php);

if ($conn) {
	 $query= mysqli_query($conn, "INSERT INTO tbl_sample (firstname," LastName,age,contactno,emailAdd)VALUES('".Firstname"
	 	' , '". $lastname. "','" .$contact. "','" . $emaile."'):"):
	 if ($query>= 1) {
	 	echo "insered";

	 }else{
	 	echoe "not inserted";
	 	die("error:" .$conn->error);
	 }
	 mysqli_close($conn);
	}else{
		die("error:" .$conn ->error);
	}
	session_destroy();
	?>