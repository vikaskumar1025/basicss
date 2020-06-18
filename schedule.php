<?php include_once('header.php')  ?>


<div class="container-fluid">
               <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-3">
                        <h4 style="color:red;">Power Station</h4>
                    </div>
                     <div class="col-sm-3">
                          <input class="form-control" type="text" name="powerstation" />
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
                          <input class="form-control" type="text" name="powerstationcode" />
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
                        <h4 style="color:blue;">Select Date</h4>
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

<style>
.row{
    padding-bottom:10px !important;
}
</style>
       <div class="container-fluid">
               <div class="row">
                    <div class="col-sm-1">
                            <h5></h5>
                    </div>
                    <div class="col-sm-2">
                                                <h5></h5>
                                        </div>
                    <div class="col-sm-2">
                            <h5>Start</h5>
                      </div>
                    <div class="col-sm-2">
                            <h5>End</h5>
                    </div>
                    <div class="col-sm-2">
                             <h5>Hours</h5>
                       </div>
                       <div class="col-sm-2">
                            <h5>Action</h5>
                         </div>
               </div>



               <div class="row">
                                   <div class="col-sm-1">
                                           <h5></h5>
                                   </div>
                                   <div class="col-sm-2">
                                                     <h5>Monday</h5>
                                                       </div>
                                   <div class="col-sm-2">
                                           <input class="form-control" type="text" name="monday_start" />
                                     </div>
                                   <div class="col-sm-2">
                                           <input class="form-control" type="text" name="monday_end" />
                                   </div>
                                   <div class="col-sm-2">
                                            <input class="form-control" type="text" name="monday_hours" />
                                      </div>
                                      <div class="col-sm-2">
                                           <input class="btn btn-success" type="submit" value="Add" name="monday_add" />
                                        </div>
                              </div>

                              <div class="row">
                                                                 <div class="col-sm-1">
                                                                         <h5></h5>
                                                                 </div>
                                                                 <div class="col-sm-2">
                                                                                   <h5>Tuesday</h5>
                                                                                     </div>
                                                                 <div class="col-sm-2">
                                                                         <input class="form-control" type="text" name="tuesday_start" />
                                                                   </div>
                                                                 <div class="col-sm-2">
                                                                         <input class="form-control" type="text" name="tuesday_end" />
                                                                 </div>
                                                                 <div class="col-sm-2">
                                                                          <input class="form-control" type="text" name="tuesday_hours" />
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                         <input class="btn btn-success" type="submit" value="Add" name="tuesday_add" />
                                                                      </div>
                                                            </div>

                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <h5></h5>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h5>Wednesday</h5>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="form-control" type="text" name="wednesday_start" />
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="form-control" type="text" name="wednesday_end" />
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="form-control" type="text" name="wednesday_hours" />
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="btn btn-success" type="submit" value="Add" name="wednesday_add" />
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <h5></h5>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h5>Thursday</h5>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="form-control" type="text" name="thursday_start" />
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="form-control" type="text" name="thursday_end" />
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="form-control" type="text" name="thursday_hours" />
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="btn btn-success" type="submit" value="Add" name="thursday_add" />
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <h5></h5>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <h5>Friday</h5>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="form-control" type="text" name="friday_start" />
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="form-control" type="text" name="friday_end" />
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="form-control" type="text" name="friday_hours" />
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <input class="btn btn-success" type="submit" value="Add" name="friday_add" />
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                        	<div class="col-sm-1">
                                                        		<h5></h5>
                                                        	</div>
                                                        	<div class="col-sm-2">
                                                        		<h5>Saturday</h5>
                                                        	</div>
                                                        	<div class="col-sm-2">
                                                        		<input class="form-control" type="text" name="saturday_start" />
                                                        	</div>
                                                        	<div class="col-sm-2">
                                                        		<input class="form-control" type="text" name="saturday_end" />
                                                        	</div>
                                                        	<div class="col-sm-2">
                                                        		<input class="form-control" type="text" name="saturday_hours" />
                                                        	</div>
                                                        	<div class="col-sm-2">
                                                        		<input class="btn btn-success" type="submit" value="Add" name="saturday_add" />
                                                        	</div>
                                                        </div>

                                                        <div class="row">
                                                        	<div class="col-sm-1">
                                                        		<h5></h5>
                                                        	</div>
                                                        	<div class="col-sm-2">
                                                        		<h5>Sunday</h5>
                                                        	</div>
                                                        	<div class="col-sm-2">
                                                        		<input class="form-control" type="text" name="sunday_start" />
                                                        	</div>
                                                        	<div class="col-sm-2">
                                                        		<input class="form-control" type="text" name="sunday_end" />
                                                        	</div>
                                                        	<div class="col-sm-2">
                                                        		<input class="form-control" type="text" name="sunday_hours" />
                                                        	</div>
                                                        	<div class="col-sm-2">
                                                        		<input class="btn btn-success" type="submit" value="Add" name="sunday_add" />
                                                        	</div>
                                                        </div>
       	</div>

        <!-- /.container-fluid -->
 <?php include_once('footer.php')  ?>