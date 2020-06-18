<?php
include('header.php');

extract($_REQUEST);
$pagename="addstation.php";
$tablename="Power_house_list";

if(isset($pincode))
{
    insert($tablename);
}

if(isset($id))
{
    destroy($id,$tablename);
}
?>
<!---------------------------------- Power house form START----------------------------------------------->
<form action="#" method="post" name="myform" id="myform">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div><b>Pincode</b></div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="pincode" name="pincode" class="form-control" placeholder="Enter Pincode"/>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div><b>State</b></div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="state" name="state" class="form-control" placeholder="State"/>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div><b>District</b></div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="district" name="district" class="form-control" placeholder="District"/>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div><b>City</b></div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="city" name="city" class="form-control" placeholder="City"/>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div><b>Station Name</b></div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="stationname" name="stationname" class="form-control" placeholder="Station Name"/>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div><b>Station Code</b></div>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="stationcode" name="stationcode" class="form-control" placeholder="Station Code"/>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-success form-control"/>
                    </div>
                    <div class="col-md-3">
                        <input type="reset" class="btn btn-danger form-control" id="" name="" value="clear" />
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------------- Power house form END ----------------------------------------------->

<br><br>
<br><br>
<br><br>
<br><br>
<!---------------------------------- Power house Form database insert javascript code Start ----------------------------------------------->
<script type="text/javascript">
$(document).ready(function(e){
    $("#myform").on('submit',function(e){
        e.preventDefault();

            $.ajax({
                    url:"<?php echo $pagename;?>",
                    type:"POST",
                    data:new FormData(this),
                    contextType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        alert(data);
                        window.location.href="<?php echo $pagename;?>";
                    },
                    error: function()
                    {
                        alert("Something Went WRONG!");
                    }

                });
    }
}
</script>
<!---------------------------------- Power house Form database insert javascript code END----------------------------------------------->

<?php include('footer.php'); ?>