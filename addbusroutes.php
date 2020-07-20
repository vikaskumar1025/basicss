<?php include("header.php");
extract($_REQUEST);

$pagename="addbusroutes.php";
$dbname="bus_list";

if(isset($busplate))
{
    insert($dbname);
}


if(isset($id))
{
    destroy($id,$dbname);
}

?>

<style>
    .btn-success {
        color: #fff;
        background-color: #221946;
        border-color: #0c191b;
    }
    .btn-success:hover {
        background-color: green;
    }


</style>

<div class="container">
    <form id="myyform" name="myyform" action="#" method="POST">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <div class="form-group">
                <label>Buses Name</label>
                <input type="text" id="busname" name="busname" class="form-control" placeholder="Add Bus Name."/>
            </div>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Name Plate</label>
                    <input type="text" id="busplate" name="busplate" class="form-control" placeholder="Add Name Plate Details."/>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Bus Type</label>
                    <input type="text" id="bustype" name="bustype" class="form-control" placeholder="Add Bus Type."/>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Cooling Method</label>
                    <input type="text" id="buscool" name="buscool" class="form-control" placeholder="Add Cooling system."/>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="form-group">

                    <input type="submit" class="form-control btn btn-success" placeholder="submit"/>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
</div>
<br>
<br>

<div class="container">
    <div class="table-responsive">
        <table id="examplee" name="examplee" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Buses Name</th>
                    <th>Name Plate</th>
                    <th>Bus Type</th>
                    <th>Cooling Method</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $rows=select($dbname);
                    if($rows!=null)
                    {
                        $count=1;
                        foreach($rows as $row)
                        {
                            $id=$row['id'];
                            $bname=$row['busname'];
                            $bplate=$row['busplate'];
                            $btype=$row['bustype'];
                            $bcool=$row['buscool'];

                            echo "<tr>
                                <td>$count</td>
                                <td>$bname</td>
                                <td>$bplate</td>
                                <td>$btype</td>
                                <td>$bcool</td>
                                <td><div class='btn btn-danger' onclick=del($id,this)>Delete</div></td>
                                </tr>";
                            $count++;
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function (e) {
        $("#myyform").on('submit',(function(e) {

            e.preventDefault();

            $.ajax({
                url: "<?php echo $pagename; ?>",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                success: function(data)
                {
                    alert("insert Completed");
                    window.location.href='<?php echo $pagename; ?>';
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
        $('#examplee').DataTable();
    } );


    function del(id,o)
    {
        //alert(id);
        if(confirm('Are you sure want to delete?'))
        {
            var p=o.parentNode.parentNode;
            p.parentNode.removeChild(p);

            $.ajax({
                url: "<?php echo $pagename; ?>",
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


<?php include("footer.php"); ?>
