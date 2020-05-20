<?php

include ("dbconnection.php");




 function insert($tablename)
{
	
	      
				
				$valnew="null";
				foreach ($_POST as $key => &$val)
				{
					$valnew.=","."'$val'";
				}
				$query="insert into $tablename values($valnew)";
				$sql =$GLOBALS['conn']->prepare ($query);	
				echo $query;
				$sql->execute() or die(print_r($sql->errorInfo(), true));
				echo "<script>alert('Data inseted Successfully')</script>";
}


 function insertCustom($tablename,$myarr)
{
	
	      
				error_log("inside insertCustom");
				$valnew="null";
				foreach ($myarr as $key => &$val)
				{
					$valnew.=","."'$val'";
				}
				$query="insert into $tablename values($valnew)";
				
				error_log("query".$query);
				$sql =$GLOBALS['conn']->prepare ($query);	
				echo $query;
				$sql->execute() or die(print_r($sql->errorInfo(), true));
				echo "<script>alert('Data inseted Successfully')</script>";
}
	
	


	 function destroy($id,$table){
			
			$query='Delete from '.$table.' where id=:id';
			
			$delete=$GLOBALS['conn']->prepare($query);
			$delete->bindParam('id',$id);
			$delete->execute();
			
			if($delete->rowCount())
			{
				
				//echo "<script>alert('Deleted Successfully')</script>";
				
			}
			else
			{
				
				//echo "<script>alert('Error Occur !! Please Try Again')</script>";
				
			}
			
		}
		
		
		 function destroyWithCol($table,$col,$id){
			
			$query="Delete from ".$table." where ".$col."='".$id."'";
			
			//echo $query;
			error_log("your message ".$query);
			$delete=$GLOBALS['conn']->prepare($query);
			//$delete->bindParam('id',$id);
			$delete->execute();
			
			if($delete->rowCount())
			{
				
				//echo "<script>alert('Deleted Successfully')</script>";
				
			}
			else
			{
				
				//echo "<script>alert('Error Occur !! Please Try Again')</script>";
				
			}
			
		}
		
		
			 function select($table){
			
			$query="SELECT * FROM $table ORDER by id DESC";
			
			$select=$GLOBALS['conn']->prepare($query);
			
			$select->execute();
			
			if($select->rowCount())
			{
				return $select->fetchAll();
			}
			else
			{
				
				echo "<script>alert('No Record Available');</script>";
			}
		}
		
		
		
			 function selectWithId($table,$id){
			
			$query="SELECT * FROM $table where id='$id'";
			
			$select=$GLOBALS['conn']->prepare($query);
			
			$select->execute();
			
			if($select->rowCount())
			{
				return $select->fetchAll();
			}
			else
			{
				
				//echo "<script>alert('No Record Available');</script>";
			}
		}
		
		
			 function selectWithSpecialCol($table,$col, $id){
			
			$query="SELECT * FROM $table where $col='$id'";
			
			
			//echo $query;
			
			$select=$GLOBALS['conn']->prepare($query);
			
			$select->execute();
			
			if($select->rowCount())
			{
				return $select->fetchAll();
			}
			else
			{
				
				//echo "<script>alert('No Record Available');</script>";
			}
		}
		
		 function selectWithSpecialColTwo($table,$col, $id,$col2,$id2){
			
			$query="SELECT * FROM $table where $col='$id' and $col2='$id2'";
			
			
			//echo $query;
			
			$select=$GLOBALS['conn']->prepare($query);
			
			$select->execute();
			
			if($select->rowCount())
			{
				return $select->fetchAll();
			}
			else
			{
				
				//echo "<script>alert('No Record Available');</script>";
			}
		}

//insert("login");

///destroy("9","login");

//echo  ("login");



?>