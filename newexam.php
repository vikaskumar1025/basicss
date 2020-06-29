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


<style>
@media only screen and (max-width: 786px){
.hh{
        flex-wrap: unset;
}
}

#ddh{
    background-color:#1D2C51;
}
#ddh:hover{
background-color:orange;
}
</style>
<script>
$(document).ready(function(){
    $("#p").hide();
  $("#button").click(function(){
    $("#p").toggle();
  });
});
</script>
<style>
         .switch {
           position: relative;
           display: inline-block;
           width: 60px;
           height: 34px;
         }

         .switch input {
           opacity: 0;
           width: 0;
           height: 0;
         }

         .slider {
           position: absolute;
           cursor: pointer;
           top: 0;
           left: 0;
           right: 0;
           bottom: 0;
           background-color: #ccc;
           -webkit-transition: .4s;
           transition: .4s;
         }

         .slider:before {
           position: absolute;
           content: "";
           height: 26px;
           width: 26px;
           left: 4px;
           bottom: 4px;
           background-color: white;
           -webkit-transition: .4s;
           transition: .4s;
         }

         input:checked + .slider {
           background-color: #2196F3;
         }

         input:focus + .slider {
           box-shadow: 0 0 1px #2196F3;
         }

         input:checked + .slider:before {
           -webkit-transform: translateX(26px);
           -ms-transform: translateX(26px);
           transform: translateX(26px);
         }

         /* Rounded sliders */
         .slider.round {
           border-radius: 34px;
         }

         .slider.round:before {
           border-radius: 50%;
         }
</style>

<style>
                 .switch {
                   position: relative;
                   display: inline-block;
                   width: 60px;
                   height: 34px;
                 }

                 .switch input {
                   opacity: 0;
                   width: 0;
                   height: 0;
                 }

                 .slider {
                   position: absolute;
                   cursor: pointer;
                   top: 0;
                   left: 0;
                   right: 0;
                   bottom: 0;
                   background-color: #ccc;
                   -webkit-transition: .4s;
                   transition: .4s;
                 }

                 .slider:before {
                   position: absolute;
                   content: "";
                   height: 26px;
                   width: 26px;
                   left: 4px;
                   bottom: 4px;
                   background-color: white;
                   -webkit-transition: .4s;
                   transition: .4s;
                 }

                 input:checked + .slider {
                   background-color: #2196F3;
                 }

                 input:focus + .slider {
                   box-shadow: 0 0 1px #2196F3;
                 }

                 input:checked + .slider:before {
                   -webkit-transform: translateX(26px);
                   -ms-transform: translateX(26px);
                   transform: translateX(26px);
                 }

                 /* Rounded sliders */
                 .slider.round {
                   border-radius: 34px;
                 }

                 .slider.round:before {
                   border-radius: 50%;
                 }
</style>


<style>
                         .switch {
                           position: relative;
                           display: inline-block;
                           width: 60px;
                           height: 34px;
                         }

                         .switch input {
                           opacity: 0;
                           width: 0;
                           height: 0;
                         }

                         .slider {
                           position: absolute;
                           cursor: pointer;
                           top: 0;
                           left: 0;
                           right: 0;
                           bottom: 0;
                           background-color: #ccc;
                           -webkit-transition: .4s;
                           transition: .4s;
                         }

                         .slider:before {
                           position: absolute;
                           content: "";
                           height: 26px;
                           width: 26px;
                           left: 4px;
                           bottom: 4px;
                           background-color: white;
                           -webkit-transition: .4s;
                           transition: .4s;
                         }

                         input:checked + .slider {
                           background-color: #2196F3;
                         }

                         input:focus + .slider {
                           box-shadow: 0 0 1px #2196F3;
                         }

                         input:checked + .slider:before {
                           -webkit-transform: translateX(26px);
                           -ms-transform: translateX(26px);
                           transform: translateX(26px);
                         }

                         /* Rounded sliders */
                         .slider.round {
                           border-radius: 34px;
                         }

                         .slider.round:before {
                           border-radius: 50%;
                         }
</style>

<style>
                                 .switch {
                                   position: relative;
                                   display: inline-block;
                                   width: 60px;
                                   height: 34px;
                                 }

                                 .switch input {
                                   opacity: 0;
                                   width: 0;
                                   height: 0;
                                 }

                                 .slider {
                                   position: absolute;
                                   cursor: pointer;
                                   top: 0;
                                   left: 0;
                                   right: 0;
                                   bottom: 0;
                                   background-color: #ccc;
                                   -webkit-transition: .4s;
                                   transition: .4s;
                                 }

                                 .slider:before {
                                   position: absolute;
                                   content: "";
                                   height: 26px;
                                   width: 26px;
                                   left: 4px;
                                   bottom: 4px;
                                   background-color: white;
                                   -webkit-transition: .4s;
                                   transition: .4s;
                                 }

                                 input:checked + .slider {
                                   background-color: #2196F3;
                                 }

                                 input:focus + .slider {
                                   box-shadow: 0 0 1px #2196F3;
                                 }

                                 input:checked + .slider:before {
                                   -webkit-transform: translateX(26px);
                                   -ms-transform: translateX(26px);
                                   transform: translateX(26px);
                                 }

                                 /* Rounded sliders */
                                 .slider.round {
                                   border-radius: 34px;
                                 }

                                 .slider.round:before {
                                   border-radius: 50%;
                                 }
</style>

<style>
                                         .switch {
                                           position: relative;
                                           display: inline-block;
                                           width: 60px;
                                           height: 34px;
                                         }

                                         .switch input {
                                           opacity: 0;
                                           width: 0;
                                           height: 0;
                                         }

                                         .slider {
                                           position: absolute;
                                           cursor: pointer;
                                           top: 0;
                                           left: 0;
                                           right: 0;
                                           bottom: 0;
                                           background-color: #ccc;
                                           -webkit-transition: .4s;
                                           transition: .4s;
                                         }

                                         .slider:before {
                                           position: absolute;
                                           content: "";
                                           height: 26px;
                                           width: 26px;
                                           left: 4px;
                                           bottom: 4px;
                                           background-color: white;
                                           -webkit-transition: .4s;
                                           transition: .4s;
                                         }

                                         input:checked + .slider {
                                           background-color: #2196F3;
                                         }

                                         input:focus + .slider {
                                           box-shadow: 0 0 1px #2196F3;
                                         }

                                         input:checked + .slider:before {
                                           -webkit-transform: translateX(26px);
                                           -ms-transform: translateX(26px);
                                           transform: translateX(26px);
                                         }

                                         /* Rounded sliders */
                                         .slider.round {
                                           border-radius: 34px;
                                         }

                                         .slider.round:before {
                                           border-radius: 50%;
                                         }
</style>

<style>
                                                 .switch {
                                                   position: relative;
                                                   display: inline-block;
                                                   width: 60px;
                                                   height: 34px;
                                                 }

                                                 .switch input {
                                                   opacity: 0;
                                                   width: 0;
                                                   height: 0;
                                                 }

                                                 .slider {
                                                   position: absolute;
                                                   cursor: pointer;
                                                   top: 0;
                                                   left: 0;
                                                   right: 0;
                                                   bottom: 0;
                                                   background-color: #ccc;
                                                   -webkit-transition: .4s;
                                                   transition: .4s;
                                                 }

                                                 .slider:before {
                                                   position: absolute;
                                                   content: "";
                                                   height: 26px;
                                                   width: 26px;
                                                   left: 4px;
                                                   bottom: 4px;
                                                   background-color: white;
                                                   -webkit-transition: .4s;
                                                   transition: .4s;
                                                 }

                                                 input:checked + .slider {
                                                   background-color: #2196F3;
                                                 }

                                                 input:focus + .slider {
                                                   box-shadow: 0 0 1px #2196F3;
                                                 }

                                                 input:checked + .slider:before {
                                                   -webkit-transform: translateX(26px);
                                                   -ms-transform: translateX(26px);
                                                   transform: translateX(26px);
                                                 }

                                                 /* Rounded sliders */
                                                 .slider.round {
                                                   border-radius: 34px;
                                                 }

                                                 .slider.round:before {
                                                   border-radius: 50%;
                                                 }
</style>

<style>
                                                         .switch {
                                                           position: relative;
                                                           display: inline-block;
                                                           width: 60px;
                                                           height: 34px;
                                                         }

                                                         .switch input {
                                                           opacity: 0;
                                                           width: 0;
                                                           height: 0;
                                                         }

                                                         .slider {
                                                           position: absolute;
                                                           cursor: pointer;
                                                           top: 0;
                                                           left: 0;
                                                           right: 0;
                                                           bottom: 0;
                                                           background-color: #ccc;
                                                           -webkit-transition: .4s;
                                                           transition: .4s;
                                                         }

                                                         .slider:before {
                                                           position: absolute;
                                                           content: "";
                                                           height: 26px;
                                                           width: 26px;
                                                           left: 4px;
                                                           bottom: 4px;
                                                           background-color: white;
                                                           -webkit-transition: .4s;
                                                           transition: .4s;
                                                         }

                                                         input:checked + .slider {
                                                           background-color: #2196F3;
                                                         }

                                                         input:focus + .slider {
                                                           box-shadow: 0 0 1px #2196F3;
                                                         }

                                                         input:checked + .slider:before {
                                                           -webkit-transform: translateX(26px);
                                                           -ms-transform: translateX(26px);
                                                           transform: translateX(26px);
                                                         }

                                                         /* Rounded sliders */
                                                         .slider.round {
                                                           border-radius: 34px;
                                                         }

                                                         .slider.round:before {
                                                           border-radius: 50%;
                                                         }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-1">
		</div>
        <div class="col-md-10">
            <div class="card" style="box-shadow: -2px 3px 16px 3px;">
                <div class="card-header" style="font-size:30px;background:#1D2C51;color:white"><center>Creat New Exam</center></div>
                <div class="card-body">
					<input type="text" class="form-control" id="examname" name="examname" placeholder="Enter the exam name" style="background:#eeeeee">
					<p>Assign the exam a name (shown in the Exam List)</p>
					<br><br><br><br><br><br>
				</div>
			</div>
		</div>
    </div>
    <br><br>


	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<div class="card" style="box-shadow: -3px 3px 16px 3px;">
				<div class="card-header" style="font-size:30px;background:#1D2C51;color:white;text-align:center;">
					Exam Questions
					<i data-v-1c5fea10="" class="fa fa-question-circle-o panel-help" style="float:right;margin-top: 5px;"></i>
				</div>
				<div class="card-body">

					<div class="row hh" >
						<div class="col-md-2">
							<div class="radio">
								<input type="radio" class="form-control" name="optradio" checked style="pull:right; box-shadow:none;">
							</div>
						</div>
						<div class="col-md-10">
							<h3>No digital exam questions</h3>
							<p>The questions are given outside of the system, e.g. orally or on a piece of paper.</p>
							<hr>
						</div>
					</div>
					<div class="row hh" >
						<div class="col-md-2">
							<div class="radio">
								<input type="radio" class="form-control" name="optradio" checked style="pull:right; box-shadow:none;">
							</div>
						</div>
						<div class="col-md-10">
						   <h3>Use a PDF file</h3>
						   <p>Add or change your choice of a PDF-file. You can add additional PDF files under "Accessibility"</p>
						   <hr>
						</div>
					</div>
					<div class="row hh" >
						<div class="col-md-2">
							<div class="radio">
								<input type="radio" class="form-control" name="optradio" checked style="pull:right; box-shadow:none;">
							</div>
						</div>
						<div class="col-md-10">
							<h3>Write exam questions</h3>
							<p>Write your questions here, or paste from Microsoft Word.</p>
							<hr>
							<br><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</DIV>
	<br><br>


	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<div class="card" style="box-shadow: -3px 3px 16px 3px;">
				<div class="card-header" style="font-size:30px;background:#1D2C51;color:white;text-align:center;">
					Student Information
					<i data-v-1c5fea10="" class="fa fa-question-circle-o panel-help" style="float:right;margin-top: 5px; margin-left:15px;"></i>
					<i data-v-1c5fea10="" class="fa panel-help fa-flask" style="float:right;margin-top: 5px;"></i>
				</div>
				<div class="card-body">
					<div class="row hh" >
						<div class="col-md-10">
							<p style="font-size:20px;">Student Information</p>
							<p>Tick what information the students have to provide before starting the exam.</p>
						</div>
					</div>

					<div class="row hh" >
						<div class="col-md-12">
							<div class="checkbox">
								<p><input type="checkbox" class="form-control" name:"studentinfo" id="studentinfo" style="box-shadow:none; height:20px; width:75px;"><div style="margin-left: 50px; margin-top: -37px;">First Name</div></p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="checkbox">
								<p><input type="checkbox" class="form-control" name:"studentinfo" id="studentinfo" style="box-shadow:none; height:20px; width:75px;"><div style="margin-left: 50px; margin-top: -37px;">Last Name</div></p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="checkbox">
								<p><input type="checkbox" class="form-control" name:"studentinfo" id="studentinfo" style="box-shadow:none; height:20px; width:75px;"><div style="margin-left: 50px; margin-top: -37px;">Email</div></p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="checkbox">
								<p><input type="checkbox" class="form-control" name:"studentinfo" id="studentinfo" style="box-shadow:none; height:20px; width:75px;"><div style="margin-left: 50px; margin-top: -37px;">Class</div></p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="checkbox">
								<p><input type="checkbox" class="form-control" name:"studentinfo" id="studentinfo" style="box-shadow:none; height:20px; width:75px;"><div style="margin-left: 50px; margin-top: -37px;">Teacher Name</div></p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="checkbox">
								<p><input type="checkbox" class="form-control" name:"studentinfo" id="studentinfo" style="box-shadow:none; height:20px; width:75px;"><div style="margin-left: 50px; margin-top: -37px;">Phone Number</div></p>
							</div>
						</div>

						<div class="col-md-12">
							<div class="checkbox">
								<p><input type="checkbox" class="form-control" name:"studentinfo" id="studentinfo" style="box-shadow:none; height:20px; width:75px;"><div style="margin-left: 50px; margin-top: -37px;">Student id</div></p>
							</div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-11">
							<hr>
							<br>
						</div>
						<div class="col-md-12">
							<h4>
								Anonymize exam
							</h4>
							<p>
								Students' identities are replaced by unique codes, and you may reveal the
								identities after grading the exams
							</p>
							<label class="switch">
								<input type="checkbox">
								<span class="slider round"></span>
							</label>
							<br><br>
							<a href="#">How does this work?</a>
						</div>
					</div>
				</div>
				<br><br>
			</div>
		</div>
	</div>
    <BR/><BR/>

	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<div class="card" style="box-shadow: -2px 3px 16px 3px;">
				<div class="card-header" style="font-size:30px;background:#1D2C51;color:white">
					<center>
						Creat New Exam
					</center>
				</div>
				<div class="card-body">
					<div class="col-md-1">
					</div>
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-6">
								<h4>
									Writing area
								</h4>
								<label class="switch">
								  <input type="checkbox" checked>
								  <span class="slider round"></span>
								</label>
							</div>
							<div class="col-md-6" style="text-align:right;">
								<div style="padding-top:50px;">
									<a href="" style="text-decoration:underline; color:black;">Limit the number of words</a>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12"><h4>Spell check</h4></div>
							<div class="col-md-4">
								<select class="form-control" id="" name="" style="background:#eeeeee;">
									<option>No</option>
									<option>yes, for English</option>
									<option>yes, for Dutch</option>
									<option>yes, for French</option>
									<option>yes, for Swedish</option>
									<option>yes, for Spanish</option>
									<option>yes, for German</option>
									<option>yes, for Italian</option>
									<option>yes, for Portugese</option>
								</select>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-8">
								<p>
									Checks the spelling and gives suggestions to misspelled words
								</p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<h4>
									Scan hand written solutions with a mobile phone
								</h4>
								<label class="switch">
									<input type="checkbox">
									<span class="slider round"></span>
								</label>
								<p>
									Gives the student the ability to scan hand written solutions. It does not require any specific app,
									but the device need to be able to read QR codes (built into the camera of most modern phones)
								</p>
							</div>
						</div>
						<br>
					</div>
					<div class="col-md-1">
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>

	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<div class="card" style="box-shadow: -2px 3px 16px 3px;">
				<div class="card-body">
					<div class="col-md-12">
						<div class="col-md-4">
						</div>
						<div class="col-md-4">
							<CENTER>
								<div ><button type="submit" name="" class="btn  btn-block" id="ddh" STYLE="border-radius:50px 50px 50px 50px; background:; color:white; border:;">Create Exam</div>
							</CENTER>
						</div>
						<div class="col-md-4">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
   <BR><BR>
</div>


<?php

include('footer.php');

?>
