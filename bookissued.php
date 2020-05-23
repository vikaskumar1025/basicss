<?php
$pagename="bookissued.php";
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
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="searchstudent" id="searchstudent" class="form-control" placeholder="Enter Student Name.">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <input type="sumit" value="Search" class="btn btn-success form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="studentname"  id="studentname" class="form-control" placeholder="Student Name.">
                     </div>
                </div>

                <div class="col-md-4">
                     <div class="form-group">
                         <input type="text" name="fathername"  id="fathername" class="form-control" placeholder="Father Name.">
                     </div>
                 </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="rollno"  id="rollno" class="form-control" placeholder="Roll Number.">
                     </div>
                 </div>
             </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="class"  id="class" class="form-control" placeholder="Class.">
                     </div>
                </div>

                <div class="col-md-4">
                     <div class="form-group">
                         <input type="text" name="department"  id="dempartment" class="form-control" placeholder="Department.">
                     </div>
                 </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="date" name="dateofbirth"  id="dateofbirth" class="form-control" placeholder="">
                    </div>
                </div>
             </div>
       </div>
</form>

<br>
<br>


<form method="post" name="formfills" action="#" id="formfills" >
       <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="searchbook" id="searchbook" class="form-control" placeholder="Enter Book Name.">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <input type="sumit" value="Search" id="searchbtn" class="btn btn-success form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="bookname"  id="bookname" class="form-control" placeholder="Book Name.">
                     </div>
                </div>

                <div class="col-md-4">
                     <div class="form-group">
                         <input type="text" name="booksubject"  id="booksubject" class="form-control" placeholder="Book Subject.">
                     </div>
                 </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="Bookuid"  id="bookuid" class="form-control" placeholder="Book UID.">
                     </div>
                 </div>
             </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="bookrate"  id="bookrate" class="form-control" placeholder="Enter Price.">
                     </div>
                </div>

                <div class="col-md-4">
                     <div class="form-group">
                         <input type="text" name="bookyear"  id="bookyear" class="form-control" placeholder="Published Year.">
                     </div>
                 </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="bookwriter"  id="bookwriter" class="form-control" placeholder="Book Writter Name.">
                    </div>
                </div>
             </div>
       </div>
</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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

$("#searchbtn").click(function(){


  console.log("search button");

  var searchbook=$("#searchbook").val();

  console.log(searchbook);


    $.ajax({
              type: 'POST',
              url: "getdatabook.php",
  			data:{"id":searchbook},
              success:function(data){

              console.log(data);

		var obj = jQuery.parseJSON(data);

  $.each(obj, function (index, value) {
  		//$("#myselect").append("<option value='"+value['id']+"'>"+value['subjectname']+"</option>");

      $("#bookname").val(value['bookname']);
        $("#booksubject").val(value['subject']);
      $("#bookuid").val(value['uid']);
         $("#bookrate").val(value['rate']);
        $("#bookyear").val(value['year']);
         $("#bookwriter").val(value['writername']);
  });

  }
  });

});



</script>

<?php

include('footer.php');

?>