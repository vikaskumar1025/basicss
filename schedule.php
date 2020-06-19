<?php
include_once('header.php');
$tablename="schedule";
$pagename="schedule.php";


if(isset($power_station)) {
insert($tablename);
}

$record=select($tablename);
?>

<style>
.row{

padding-bottom:15px

}
</style>



<!---------------Body Start Schedule Form To add Schedule------------->
<div class="container">
	<form action="" id="myform" method="POST">
		<div class="row">
			<div class="col-sm-4">
			</div>
			
			<div class="col-sm-4">
				<img src="images/schedule.png" width=100% />
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<p>Power Station</p>
					<input class="form-control" type="hidden" value="1" name="powerhouse_id" />
					<input class="form-control" type="text" name="power_station" />
				</div>
			</div>

			<div class="col-sm-4">
				<div class="form-group">
					<p>Power Station Code</p>
					<input class="form-control" type="text" name="power_station_code" />
				</div>
			</div>

			<div class="col-sm-4">
				<div class="form-group">
					<p>Select Date</p>
					<input class="form-control" type="date" name="date" />
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<p>Start</p>
					<input type="time" class="form-control" name="start" />
				</div>
			</div>

			<div class="col-sm-4">
				<div class="form-group">
					<p>End</p>
					<input type="time" class="form-control" name="end" />
				</div>
			</div>

			<div class="col-sm-4">
				<div class="form-group">
					<p>Hours</p>
					<input class="form-control" name="hours" />
				</div>
			</div>

			<div class="col-sm-4">
				<div class="form-group">
					<button type="submit" class="btn btn-success">Add</button>
				</div>
			</div>
		</div>
	</form>
	
	
	
<!----------------Start Schedule Data Table------------------------>

	<div class="row">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Powerhouse ID</th>
						<th>Power Station</th>
						<th>Power Station Code</th>
						<th>Date</th>
						<th>Start</th>
						<th>End</th>
						<th>Hours</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if(count($record))
					{
						foreach($record as $row)
						{
							$id = $row['id'];
							$powerhouse_id = $row['powerhouse_id'];
							$power_station = $row['power_station'];
							$power_station_code = $row['power_station_code'];
							$date = $row['date'];
							$start = $row['start'];
							$end = $row['end'];
							$hours = $row['hours'];
							echo "<tr>
								<td>$id</td>
								<td>$powerhouse_id</td>
								<td>$power_station</td>
								<td>$power_station_code</td>
								<td>$date</td>
								<td>$start</td>
								<td>$end</td>
								<td>$hours</td>
							</tr>";
						}
					}
					else
					{
						echo '<tr>
							<td colspan="8"><center><p>Data Not Found</p></center></td>
							</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

<!----------------End Schedule Data Table------------------------>
	
	
	
</div>
<!---------------Body Start Schedule Form To add Schedule------------->










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
                alert("");

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