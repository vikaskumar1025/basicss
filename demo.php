<?php

include('header.php');

extract($_REQUEST);


if(isset($classname))
{
insert("newclass");

}


if(isset($id))
{
destroy($id,"newclass");

}

?>

<form action="mytest.php" method="post" name="myform" id="myform">
<div class="container">
<h3 style="text-align: center;
    width: 100%;
    padding: 15px;font-size:22px;" class="btn btn-primary"><b>Add New Class</b></h3> <br><br>
<div class="row">


<div class="col-md-4">
<label>Select Stream Name</label>
<select name="stream" id="stream" class="form-control" >

	<?php $rows=selectWithSpecialCol("stream","schoolid", $school_id);


							  if($rows!=null)
							  {
								foreach($rows as $row)
								{

								$id=$row['id'];
								$name=$row['name'];


							echo "<option>$name</option>";


								}
							  }
							?>
</select>


</div>

<div class="col-md-4">
<label>Class Name</label>
<input class="form-control" type="text" name="classname" id="classname" placeholder="Enter Stream Name">

</div>
<div class="col-md-4">

<label>Generate Certificate</label>
<select name="certificateyesorno" id="certificateyesorno" class="form-control">
<option>Yes</option>
<option>NO</option>
</select>
</div>
</div>
<br>
<div class="row">


<div class="col-md-4" style="display:none">
<label>Starting Roll No Boys</label>
<input class="form-control" type="text" name="boystartroll" id="boystartroll" placeholder="Enter Boys Starting Roll No">
</div>


<div class="col-md-4" style="display:none">
<label>Starting Roll No Girl</label>
<input class="form-control" type="text" name="girlstartroll" id="girlstartroll" placeholder="Enter Girl Starting Roll No">
</div>

<div class="col-md-4" >
<label>Course Duration</label>
<input class="form-control" type="number" name="courseyear" id="courseyear" placeholder="Enter Course Duration In year">
<input class="form-control" type="hidden" name="schoolid" id="schoolid" value="<?php echo $school_id  ?>">
</div>
</div>
<br>
<br>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-4">
<div class="form-group">
<input type="submit" class="btn btn-success form-control" id="myaction" value="Submit">
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<input type="reset" class="btn btn-danger form-control" id="myaction" value="Reset"></div>
</div>

<div class="col-md-2"></div>
</div>
</div>
</form>
<br><br>
<div class="container">
 <div class="row ">
	<div class="col-md-12">
	  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S.No</th>
				<th>Stream Name</th>
				<th>Class Name</th>
					<th>Certificate Printing </th>

							<th>Course Duration</th>
						<th>Action Delete</th>
            </tr>
        </thead>
        <tbody>
      	<?php $rows=selectWithSpecialCol("newclass","schoolid", $school_id);


							  if($rows!=null)
							  {
								  $count=1;
								foreach($rows as $row)
								{

								$id=$row['id'];
								$stream=$row['stream'];
							    $classname=$row['classname'];
								$certificateyesorno=$row['certificateyesorno'];
								$boystartroll=$row['boystartroll'];
					             $girlstartroll=$row['girlstartroll'];
								 $courseyear=$row['courseyear'];
							echo "<tr><td>$count</td>
							<td>$stream</td>
							<td>$classname</td>
							<td>$certificateyesorno</td>

							<td>$courseyear</td>
							<td><div class='btn btn-danger' onclick=del($id,this)>Delete</div></td>
							</tr>";

						$count=$count+1;
								}
							  }
							?>

        </tbody>

    </table>


	</div>
	 </div>
</div>




<br>
<br><br><br><br><br><br><br>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<script type="text/javascript">
$(document).ready(function (e) {
	$("#myform").on('submit',(function(e) {

			e.preventDefault();



					$.ajax({
						url: "addnewclass.php",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
						success: function(data)
						{
						alert(data);

						window.location.href='addnewclass.php';
						},
						error: function()
						{

							alert("Something went Wrong !");
						}


				   });




	}));
});


</script>





<script>

 $(document).ready(function() {
    $('#example').DataTable();
} );


	function del(id,o)
	{
		//alert(id);
		if(confirm('Are you sure want to delete?'))
		{
			 var p=o.parentNode.parentNode;
         p.parentNode.removeChild(p);

				$.ajax({
						url: "addnewclass.php",
						type: "POST",
						data:  {"id":id},
						success: function(data)
						{
						alert(data);
						},
						error: function()
						{

							alert("Something went Wrong !");
						}


				   });

			//window.location.href='vapaar.php?id='+id;
		}
	}

</script>


<?php

include('footer.php');

?>
