<?php
$pagename="bookrec.php";
$tablename="booksrecord";
include('header.php');

extract($_REQUEST);

if(isset($bookname))
{
insert($tablename);

}


if(isset($id))
{
destroy($id,$tablename);
}


?>

<form method="post" name="formfills" action="#" id="formfills" >
       <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="bookname"  id="bookname" class="form-control" placeholder="Book Name.">
                     </div>
                </div>

                <div class="col-md-4">
                     <div class="form-group">
                         <input type="text" name="subject"  id="subject" class="form-control" placeholder="Subject.">
                     </div>
                 </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="uid"  id="uid" class="form-control" placeholder="UID.">
                     </div>
                 </div>
             </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="rate"  id="rate" class="form-control" placeholder="Enter Price.">
                     </div>
                </div>

                <div class="col-md-4">
                     <div class="form-group">
                         <input type="text" name="year"  id="year" class="form-control" placeholder="Published Year.">
                     </div>
                 </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="writername"  id="writername" class="form-control" placeholder="Book Writtername">
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
       </div>
</form>

<br>
<br>
<br>

<div class="container">
 <div class="row ">
	<div class="col-md-12">
	  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>S.No</th>
				<th>Book Name</th>
				<th>Subject</th>
			    <th>UID</th>
			    <th>rate</th>
			    <th>Year</th>
			    <th>Writter Name</th>
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
								$bkrec_bname=$row['bookname'];
							    $bkrec_subject=$row['subject'];
								$bkrec_uid=$row['uid'];
                                $bkrec_rate=$row['rate'];
							    $bkrec_year=$row['year'];
								$bkrec_writter=$row['writername'];

							echo "<tr><td>$count</td>
							<td>$bkrec_bname</td>
							<td>$bkrec_subject</td>
							<td>$bkrec_uid</td>
                            <td>$bkrec_rate</td>
							<td>$bkrec_year</td>
							<td>$bkrec_writter</td>";

							echo "<td><div class='btn btn-danger' onclick=del($id,this)>Delete</div></td></tr>";

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
	$("#formfills").on('submit',(function(e) {

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