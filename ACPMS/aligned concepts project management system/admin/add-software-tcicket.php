<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['alogin']==0)) {
  header('location:index.php');
  } else{
if(isset($_POST['submit']))
  {
    $nocodelines=$_POST['nocodelines'];
    $price=$_POST['price'];
    $ticketid=mt_rand(100000000, 999999999);
   
        $query=mysqli_query($con, "insert into  tbltickets(TicketId,NoCodeLines,ProjectPrice) value('$ticketid','$nocodelines','$price')");
    if ($query) {
    
     echo '<script>alert("Ticket information has been added.")</script>';
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }

  
}

  
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Admin | Tickets </title>
        
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

                <link href="../assets/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"/>  
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
                        <div class="page-title"><h4>Projects History</h4></div>
                    </div>
                    <div class="col s12 m12 l12">
                   
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title"></span>
                                <?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
                                <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add Ticket</h4>


                                        <form method="post" action="" name="">
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Adult</label>
                                                <input type="text" class="form-control" id="noadult" name="noadult" aria-describedby="emailHelp" placeholder="No. of Adult" value="" required="true">
                                            </div>
                                         <div class="form-group">
                                                <label for="exampleInputEmail1">Children</label>
                                                <input type="text" class="form-control" id="nochildren" name="nochildren" aria-describedby="emailHelp" placeholder="No. of Childrens" value="" required="true">
                                                
                                            </div>
                                            <?php

$ret=mysqli_query($con,"select * from tbltickets where TicketType='Foreigner Adult'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                             <input type="hidden" name="aprice" value="<?php  echo $row['Price'];?>">
                                             <?php } ?>

                                             <?php

$ret=mysqli_query($con,"select * from tbltickets where TicketType='Foreigner Child'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                            <input type="hidden" name="cprice" value="<?php  echo $row['Price'];?>">
                                          
                                      <?php } ?>
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" name="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
                         
                            
                        </div>
                    </div>
                </div>
            </div>
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
         <script src="assets/js/pages/ui-modals.js"></script>
        <script src="assets/plugins/google-code-prettify/prettify.js"></script>
        
    </body>
</html>
<?php } ?>