<?php
$pagename="currentpage.ext";
$tablename="tablenameInDatabase";
include('header.php');

extract($_REQUEST);

if(isset($sname))
{
insert($tablename);

}


if(isset($id))
{
destroy($id,$tablename);
}


?>

<form method="post" name="myform" action="<?php echo $pagename ?>" id="myform" >
       <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name=""  id="" class="form-control" placeholder="">
                     </div>
                </div>

                <div class="col-md-4">
                     <div class="form-group">
                         <input type="text" name=""  id="" class="" placeholder="">
                     </div>
                 </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name=""  id="name" class="form-control" placeholder="">
                     </div>
                 </div>
             </div>
       </div>

            <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                        <div class="form-group">
                              <input type="submit"  class="btn btn-success form-control">
                        </div>
                  </div>

                   <div class="col-md-4">
                          <div class="form-group">
                             <input type="submit" value="Clear"  class="btn btn-danger form-control">
                           </div>
                                    </div>
                  <div class="col-md-2"></div>


            </div>

</form>
<br>
<br>


<div class="container">
 <div class="row ">
	<div class="col-md-12">
	  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S.No</th>
				<th>Student Name</th>
				<th>Father Name</th>
					<th>Mother Name </th>
						<th>Action Delete</th>
            </tr>
        </thead>
        <tbody>

<?php $rows=select($tablename);


							  if($rows!=null)
							  {
								  $count=1;
								foreach($rows as $row)
								{

								$id=$row['id'];
								$=$row[''];
							    $=$row[''];
								$=$row[''];

							echo "<tr><td>$count</td>
							<td>$</td>
							<td>$</td>
							<td>$</td>


							<td><div class='btn btn-danger' onclick=del($id, this)>Delete</div></td>
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




<script type="text/javascript">
$(document).ready(function (e) {
	$("#myform").on('submit',(function(e) {

			e.preventDefault();



					$.ajax({
						url: "<?php echo $pagename ?>",
						type: "POST",
						data:  new FormData(this),
						contentType: false,
						cache: false,
						processData:false,
						success: function(data)
						{
						alert(data);

						window.location.href= "<?php echo $pagename ?>";
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
						url:  "<?php echo $pagename ?>",
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