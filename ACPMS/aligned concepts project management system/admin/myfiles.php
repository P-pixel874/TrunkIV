<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:.php');
}
else{
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from  tblleavetype  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$msg="Project type record deleted";

}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Admin | Manage Project Type</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="../assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
            
        <!-- Theme Styles -->
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/alpha.css" rel="stylesheet" type="text/css"/>
<style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
    </head>
    <body>
       <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title"><h4>CLIENT UPLOADED INFORMATION</h4></div>
                    </div>
                   
                    <div class="col s12 m10 12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title"></span>
                                <?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
                                <table id="example" class="display responsive-table ">
                                   
        <!--<div class="container-fluid">
             <a class="navbar-brand" href="https://sourcecdester.com">Sourcecodester</a>
        </div> -->
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary"></h3>
        
        <form method="POST" action="upload.php" enctype="multipart/form-data">
                <div class="form-group">    
                    <input name="file" type="file" required="required"/>
                </div>  
                <center><button class="btn btn-primary" name="upload"><span class="glyphicon glyphicon-upload"></span> Upload</button></center>
            </form>
        </div>
        <div class="col-md-18">
            <table class="table table-bordered">
                <thead class="alert-info">
                    <tr>
                        <th>File Name</th>
                        <th>File Location</th>
                        <th>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspAction</th>
                    </tr>
                <thead>
                <tbody>
                    <?php
                        require 'conn.php';
                        $query=mysqli_query($conn, "SELECT * FROM `file`") or die(mysqli_error());

                        while($fetch=mysqli_fetch_array($query)){
                    ?>


                        <tr>
                             
                            
                        
                            <td><?php echo $fetch['name']?></td>
                            <td><?php echo $fetch['file']?></td>
                            <td><a href="download.php?file=downloads" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a><a href="delete.php?file_id=<?php echo $fetch['file_id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
                        
                            
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
         
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="js/jquery-3.2.1.min.js"></script>  
<script src="js/bootstrap.js"></script> 
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        <script src="../assets/js/pages/table-data.js"></script>
        
    </body>
</html>
<?php } ?>