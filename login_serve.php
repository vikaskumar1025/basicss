<?php 
session_start();
require_once "dbconnection.php";
extract($_REQUEST);


try
{
	$fname="";
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];

	$sql =$GLOBALS['conn']->prepare ("select * from masterlogin where username='$email' and password='$password'");	
	//$sql->bindParam("email",$email);
	//$sql->bindParam("password",$password);



       echo("select * from masterlogin where username='$email' and password='$password'");
		$sql->execute();
				if($sql->rowCount())
                {
                   
				   
				   error_log("inside email");
				   
                    while($row=$sql->fetch())
                    {
						$id=$row['id'];
						$fname=$row['username'];
						$_SESSION['msg']="Login Successfully login";
						$_SESSION['adminemail']=$row['email'];
						$_SESSION['adminuname']=$fname;
					}   
						
					echo "<script>window.location.href='index.php'</script>";			
				}
				else
				{
					 error_log("else email");
		$_SESSION['msg']="Invalid login !";
		//header("location:login.php");
			//echo"<script>window.location.href='login.php'</script>";
				}
}
catch( Exception $exception )
{
	$msg="Invalid login !";
	echo"<script>window.location.href='login.php?msg=$msg'</script>";
	//header("location:login.php?msg=$msg");
    echo "PDO error :" . $exception->getMessage();
}
	
?>