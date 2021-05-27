<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['zmsaid']==0)) {
  header('location:index.php');
  } else{


  
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Admin | Manage Project Tickets</title>
        
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
                        <div class="page-title"><h4>Manage Project Ticket</h4></div>
                    </div>
                   
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                
                                <table id="example" class="display responsive-table ">
                                    <div class="main-content-inner">
                <div class="row">
        
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body" id="exampl">
                                        <?php
 $vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tbltickets where ID='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                        <h4 class="header-title" style="color: blue">View Detail of Ticket ID: <?php  echo $row['TicketId'];?></h4>
                                        <h5 class="header-title" style="color: blue">Visiting Date: <?php  echo $row['CreationDate'];?></h5>


                                        <table border="1" class="table table-striped table-bordered first" >
                              <tr>
                                                <th>#</th>
                                                <th>No of Tickets</th>
                                                <th>Price per unit</th>
                                                <th>Total</th>
                                            </tr>
                                <tr>
                                    <th >Number of Adult </th>
                                    <td style="padding-left: 10px"><?php  echo $noadult=$row['NoAdult'];?></td>
                                     <td style="padding-left: 10px">$<?php  echo $cup=$row['AdultUnitprice'];?></td>
                                     <td style="padding-left: 10px">$<?php  echo $ta=$cup*$noadult;?></td>
                                </tr>
                                <tr>
                                    <th>Number of Chlidren </th>
                                    <td style="padding-left: 10px"><?php  echo $nochild=$row['NoChildren'];?></td>
                                    <td style="padding-left: 10px">$<?php  echo $aup=$row['ChildUnitprice'];?></td>
                                     <td style="padding-left: 10px">$<?php  echo $tc=$aup*$nochild;?></td>
                                </tr>
     
                                 <tr>
                                    <th style="text-align: center;color: red;font-size: 20px" colspan="3">Total Ticket Price</th>
                                    <td style="padding-left: 10px;">$<?php  echo ($ta+$tc);?></td>
                                </tr>
                                </table>
                                    </div>
                                    <?php } ?>
                                     <p style="margin-top:1%"  align="center">
  <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
</p>
                                </div>
                            </div>
                            <!-- basic form end -->
                         
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                 
                                    <tbody>

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