<?php include_once('header.php');



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

    		</div>
    		<div class="col-sm-3">
    			<button class="btn btn-success">Add</button>
    		</div>
    	</div>
    	</form>
</div>

        <!-- /.container-fluid -->
 <?php include_once('footer.php')  ?>