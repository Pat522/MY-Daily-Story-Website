<?php
error_reporting(0);
session_start();
$name=$_POST['un'];
$pass=$_POST['pw'];


$con=mysqli_connect("localhost","root","","story");
if(!$con)
	die("Server could not connected");
$sqldata="select * from login_c where username='".$name."' and password='".$pass."'";
$rs=mysqli_query($con,$sqldata);
if($rs==0)
die("not valid");
	$value=mysqli_fetch_assoc($rs);
	if($value["password"]==$pass&&$value['username']==$name)
	{
		$_SESSION['mm']=$name;
		$cookie_name = "login";
$cookie_value = $name;
setcookie($cookie_name, $cookie_value); 
		
		  echo "<script> alert('Login Sucessful');
  location.href='index.php'; </script>";

	}
	else 
	{
	echo "<script> alert('Wrong')</script>";
		
	}

?>

