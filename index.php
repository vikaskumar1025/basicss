<?php include_once('header.php')  ?>

<?php     //logic include here       

	$cc=0;
	$dd=0;
	
	 $sql =$GLOBALS['conn']->prepare ("select * from daybook order by date desc");	

   
 $sql->execute();
   if($sql->rowCount())
                {
					
					
					$count=1;
					//echo "<br/>herlll1<br>";
                  while($row=$sql->fetch())
                    {
						
						
						
							$date = new DateTime();
							$edate=$row['date'];
		$date1 = date("Y-m-d H:i:s");
		
			$interval = date_diff(date_create($date1), date_create($edate));
		
					$id=$row['id'];
					$paytype=$row['paytype'];
					$pname=$row['pname'];
					$amount=$row['amount'];
					$date=$row['date'];
					$remaks=$row['remaks'];
						$remaks2=$row['remaks2'];
						$amc=$row['amc'];
						$ptype=$row['ptype'];
						
					
						
					$timestamp = strtotime($edate);
                         
						 $type="Others";
						 if($ptype==1)
						 {
							 $type="Others"; 
						 }
						if($ptype==2)
						 {
							 $type="Student"; 
						 }
						  
						  $paycd;
						  if($paytype=="Income")
						  {
							  $paycd="Credit"; 
							  $cc=$cc+$amount;
						  }
						  if($paytype=="Expenses")
						  {
							  $paycd="Debit"; 
							  $dd=$dd+$amount;
						  }
					}
				}
	
		 $sql =$GLOBALS['conn']->prepare ("select * from admission");	

   $count=0;
 $sql->execute();
   if($sql->rowCount())
                {
					
					
					$count=1;
					//echo "<br/>herlll1<br>";
                  while($row=$sql->fetch())
                    {
						
		
					$id=$row['id'];
			
   $count= $count+1;
					}
				}
	
						
function mygetprudectname(){
	$getdata='';
	
 $sql =$GLOBALS['conn']->prepare ("select * from daybook order by date desc");	

   
 $sql->execute();
   if($sql->rowCount())
                {
					
					
					$count=1;
					//echo "<br/>herlll1<br>";
                  while($row=$sql->fetch())
                    {
						
						
						
							$date = new DateTime();
							$edate=$row['date'];
		$date1 = date("Y-m-d H:i:s");
		
			$interval = date_diff(date_create($date1), date_create($edate));
		
					$id=$row['id'];
					$paytype=$row['paytype'];
					$pname=$row['pname'];
					$amount=$row['amount'];
					$date=$row['date'];
					$remaks=$row['remaks'];
						$remaks2=$row['remaks2'];
						$amc=$row['amc'];
						$ptype=$row['ptype'];
						
					
						
					$timestamp = strtotime($edate);
                         
						 $type="Others";
						 if($ptype==1)
						 {
							 $type="Others"; 
						 }
						if($ptype==2)
						 {
							 $type="Student"; 
						 }
						  
						  $paycd;
						  if($paytype=="Income")
						  {
							  $paycd="Credit"; 
							  $cc=$cc+$amount;
						  }
						  if($paytype=="Expenses")
						  {
							  $paycd="Debit"; 
							  $dd=$dd+$amount;
						  }
	
					$new_date = date("M , d-Y", $timestamp);
					
				      $getdata.="<tr>
                      <th>$count</th>
                      <th><a href='editcust.php?id=$id'>$pname</a></th>
					
                      <th>$type</th>
					  
                      <th>$paycd</th>
					  <th>$amount</th>
					    <td><p style='color:red'>".$new_date ."<p></td>
                     <td><p style='color:green'>".$interval->format(' %a '). "<p></td>
					 
					  
					    <th><button class='btn btn-success' style='width:100px'><i class='fa fa-whatsapp' aria-hidden='true'></i></button></th>
						<th><button class='btn btn-primary' style='width:100px'><i class='fa fa-copy' aria-hidden='true'></i></button></th>
                      
						
                    </tr>";	
					 
					//echo "$id <br>$product<br>" ;
					$count=$count+1;
				  
					}   
									
				}  
				
				return  $getdata;
}


//login inlcude here end
  ?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Student</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $count; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $cc; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Expense</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php  echo $dd; ?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Cash In Hand</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php  echo $cc-$dd; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S No</th>
                      <th>Party Name</th>
                    
                      <th>Type</th>
                      <th>Transaction</th>
					   <th>Amount</th>
					      <th>Transation Date</th>
                      <th>Day Before</th>
					 
					    <th>Action</th>
						  <th>Action</th>
						  
                    </tr>
                  </thead>
                  <tfoot>
                   
                  </tfoot>
                  <tbody>
                 <?php  echo mygetprudectname();?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
	  
          <!-- Content Row -->

    

        

        </div>
        <!-- /.container-fluid -->
 <?php include_once('footer.php')  ?> 