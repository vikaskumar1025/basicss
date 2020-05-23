<?php

include 'dbconnection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

extract($_REQUEST);
$response = array();
//$response["area"] = array();


	$sql = $conn->prepare("SELECT * FROM booksrecord WHERE uid='$id'");

	$sql->execute();
	
		if($sql->rowCount())
		{
			while(($row = $sql->fetch(PDO::FETCH_ASSOC)))
			{
			//print_r($row);
			$tmp = array();
			$tmp['id'] = $row['id'];
			$tmp['bookname'] = $row['bookname'];
		    $tmp['subject'] = $row['subject'];
			$tmp['uid'] = $row['uid'];
			$tmp['rate'] = $row['rate'];
			$tmp['year'] = $row['year'];
			$tmp['writername'] = $row['writername'];
			array_push($response,$tmp);
			}
		}
		
		if(!empty($response))
		{
			$jsonstring = json_encode($response,false);
			echo $jsonstring;
		}
		else
		{
		}

		
?>