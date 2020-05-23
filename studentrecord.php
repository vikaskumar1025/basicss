<?php
$pagename="studentrecord.php";
$tablename="students";
include('header.php');

extract($_REQUEST);

if(isset($studentname)) {
insert($tablename);
}

if(isset($id)) {
destroy($id, $tablename);
}

?>

<form method="post" action="<?php echo $pagename?> " name="myform" id="myform">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="studentname" id="studentname" class="form-control" placeholder="Student Name.">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="fathername" id="fathername" class="form-control" placeholder="Father Name">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="mothername" id="mothername" class="form-control" placeholder="Mother Name">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="rollnumber" id="rollnumber" class="form-control" placeholder="Roll Number.">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input type="date" name="birthdate" id="birthdate" class="form-control" placeholder="Birth Date.">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="class" id="class" class="form-control" placeholder="class">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-4">
                <div class="form-group">
                    <input type="submit" class="btn btn-success form-control">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <input type="submit" value="Clear" class="btn btn-danger form-control">
                </div>
            </div>
        </div>
    </div>
</form>


<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Student Name</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Roll Number</th>
                        <th>Date Of Birth</th>
                        <th>class</th>

                        <th>Action Delete </th>
                    </tr>
                </thead>

                <tbody>
                <?php $rows=select($tablename);

                        if($rows!=null) {
                            $count=1;
                            foreach($rows as $row)
                            {
                                $id=$row['id'];
                                $strec_sname=$row['studentname'];
                                $strec_fname=$row['fathername'];
                                $strec_mname=$row['mothername'];
                                $strec_rollno=$row['rollnumber'];
                                $strec_dob=$row['birthdate'];
                                $strec_class=$row['class'];

                                echo
                                "<tr><td>$count</td>
                                 <td>$strec_sname</td>
                                 <td>$strec_fname</td>                                 <td>$strec_mname</td>
                                 <td>$strec_rollno</td>
                                 <td>$strec_dob</td>
                                 <td>$strec_class</td>

                                 <td><div class='btn btn-danger' onclick=del($id,this)>Delete </div></td>
                                 </tr>";
                            $count=$count+1;
                            }}
                ?>
                </tbody>
            </table>
        </div>
    </div>
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
                alert(data);

                window.location.href="";},

                error: function() {
                alert("Something went wrong !");
                }

            });

        }));
});

</script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
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

<?php
include('footer.php');
?>