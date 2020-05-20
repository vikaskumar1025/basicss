<?php
session_start();

if(isset($_SESSION['adminemail']))
{
	//header("location:http://saraswatigoi.com/super");
	//echo"<script>window.location.href='http://saraswatigoi.com/master'</script>";	
}
else{
	//header("location:login.php");
	echo"<script>window.location.href='login.php'</script>";
}


?>