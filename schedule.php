<?php include_once('header.php');

$tablename="schedule";
$pagename="schedule.php";


if(isset($bookname)) {
insert($tablename);
}

?>

<style>


.row{

padding-bottom:15px

}


</style>
<div class="container-fluid">
<form action="" method="POST">
               <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-3">
                        <h4 style="color:red;">Power Station</h4>
                    </div>
                     <div class="col-sm-3">
                            <input class="form-control" type="hidden" value="1" name="powerhouse_id" />
                          <input class="form-control" type="text" name="power_station" />
                     </div>

               </div>
               <div class="row">
               </div>
               <div class="row">
               </div>
               <div class="row">
                              </div>
                              <div class="row">
                              </div>


</div>


<div class="container-fluid">
               <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-3">
                        <h4 style="color:red;">Power Station Code</h4>
                    </div>
                     <div class="col-sm-3">
                          <input class="form-control" type="text" name="power_station_code" />
                     </div>
               </div>
               <div class="row">
               </div>
               <div class="row">
               </div>
               <div class="row">
                              </div>
                              <div class="row">
                              </div>


</div>


<div class="container-fluid">
               <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-3">
                        <h4 style="color:red;">Select Date</h4>
                    </div>
                     <div class="col-sm-3">
                          <input class="form-control" type="date" name="date" />
                     </div>
               </div>
               <div class="row">
               </div>
               <div class="row">
               </div>
               <div class="row">
                              </div>
                              <div class="row">
                              </div>


</div>

<div class="containder-fluid">
	<div class="row">
		<div class="col-sm-3">

		</div>
		<div class="col-sm-3">
			<h4 style="color:red;">Start</h4>
		</div>
		<div class="col-sm-3">
			<input class="form-control" name="start" />
		</div>

	</div>

	<div class="row">
		<div class="col-sm-3">

		</div>
		<div class="col-sm-3">
			<h4 style="color:red;">End</h4>
		</div>
		<div class="col-sm-3">
			<input class="form-control" name="end" />
		</div>
	</div>
	<div class="row">
    		<div class="col-sm-3">

    		</div>
    		<div class="col-sm-3">
    			<h4 style="color:red;">Hours</h4>
    		</div>
    		<div class="col-sm-3">
    			<input class="form-control" name="hours" />
    		</div>
    	</div>
	    <div class="row">
    		<div class="col-sm-3">

    		</div>
    		<div class="col-sm-3">

    		</div>
    		<div class="col-sm-3">
    			<button class="btn btn-success">Add</button>
    		</div>
    	</div>

    	</form>
</div>
<script type="text/javascript">
$(document).ready(function (e) {
    $("#myform").on('submit',(function (e){
        e.preventDefault();

            $.ajax({
                url:"<?php echo $pagename?>",
                type:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success: function(data)
                {
                alert("Data Inserted !");

                window.location.href="<?php echo $pagename ?>";

                },

                error: function() {
                alert("Something went wrong !");
                }

            });

        }));
});
 function del(id, o) {
        //alert(id);
        if(confirm('Are you sure want to delete?'))
        {
            var p=o.parentNode.parentNode;
            p.parentNode.removeChild(p);

                $.ajax({
                    url:"<?php echo $pagename ?>",
                    type: "POST",
                    data: {"id":id},
                    success: function(data){
                        alert(data);
                    },

                    error: function(){
                        alert("Something went Wrong !");
                    }
                });
            //winoow.location.href='' ;
        }
    }
</script>
        <!-- /.container-fluid -->
 <?php include_once('footer.php')  ?>