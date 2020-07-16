<?php
$pagename="practice.php";
$tablename="test";
include('header.php');

extract($_REQUEST);

if(isset($name))
{
insert($tablename);

}


if(isset($id))
{
destroy($id,$tablename);
}


?>
<!----start code here--->
<form method="post" name="myform" action="practice.php" id="myform" >
      <div class="container">
           <div class="row">
                <div class="col-md-4">
                </div>
                 <div class="col-md-1">
                     <label for="male">Name</label>
                   </div>
                <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" name="name"  id="name" class="form-control" placeholder="name" required>
                       </div>
                 </div>
                        <div class="col-md-4">
                        </div>
           </div>

  <div class="row">
                <div class="col-md-4">

                </div>
                 <div class="col-md-1">
                 <label for="male">Class</label>
                    </div>
                <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" name="name"  id="class" class="form-control" placeholder="class" required>
                       </div>
                 </div>
                        <div class="col-md-4">
                        </div>
           </div>

  <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-1">
                    <label for="male">Rollno</label>
                         </div>
                <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" name="rollno"  id="rollno" class="form-control" placeholder="rollno" required>
                       </div>
                 </div>
                        <div class="col-md-4">
                        </div>
           </div>


            <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-2">
                        <div class="form-group">
                              <input type="submit"  class="btn btn-success form-control">
                        </div>
                  </div>

                   <div class="col-md-2">
                          <div class="form-group">
                             <input type="reset" value="Clear"  class="btn btn-danger form-control">
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
				<th>class Name</th>
					<th>Rollno </th>
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
								$name=$row['name'];
							    $class=$row['class'];
								$roll=$row['roll'];

							echo "<tr><td>$count</td>

							<td>$name</td>
							<td>$class</td>
							<td>$roll</td>


							<td><div class='btn btn-danger' onclick=del($id,this)>Delete</div></td>
								<td><div class='btn btn-danger' onclick=edit($id)>edit</div></td>
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



 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form method="post" name="myform" action="practice.php" id="myform" >
                <div class="container">
                     <div class="row">
                          <div class="col-md-4">
                          </div>
                           <div class="col-md-1">
                               <label for="male">Name</label>
                             </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="name"  id="name" class="form-control" placeholder="name" required>
                                 </div>
                           </div>
                                  <div class="col-md-4">
                                  </div>
                     </div>

            <div class="row">
                          <div class="col-md-4">

                          </div>
                           <div class="col-md-1">
                           <label for="male">Class</label>
                              </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                  <input type="text" name="name"  id="class" class="form-control" placeholder="class" required>
                                 </div>
                           </div>
                                  <div class="col-md-4">
                                  </div>
               </div>
        </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>





<?php

include('footer.php');

?>