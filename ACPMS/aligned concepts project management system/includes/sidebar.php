     <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                    <?php
$eid=$_SESSION['eid'];
$sql = "SELECT FirstName,LastName,EmpId from  tblclients where id=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>
                                <p><?php echo htmlentities($result->FirstName." ".$result->LastName);?></p>
                                <span><?php echo htmlentities($result->EmpId)?></span>
                         <?php }} ?>
                        </div>
                    </div>

                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">

  <li class="no-padding"><a class="waves-effect waves-grey" href="myprofile.php"><img src="icons/1522443-200.png" width="38" style="color: blue"><big>MY PROFILE</big></a></li>
  <li class="no-padding"><a class="waves-effect waves-grey" href="emp-changepassword.php"><img src="icons/162572-200.png" width="38" style="color: blue"><big>CHANGE PASSWORD</big></a></li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><img src="icons/2110129-200.png" width="48" style="color: blue"><big>VIEW PROJECTS</big></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="apply-project.php">Apply Project</a></li>
                                <li><a href="projecthistory.php">Project History</a></li>
                            </ul>
                        </div>
                    </li>


                          <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><img src="icons/1522455-200.png" width="48" style="color: blue"><big>MY UPLOADS</big></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="files.php">Upload</a></li>
                                
                            </ul>
                        </div>
                    </li>


                  <li class="no-padding">
                                <a class="waves-effect waves-grey" href="logout.php"><img src="icons/1522453-200.png" width="38" style="color: blue"><big>SIGN OUT</big></a>
                            </li>


                </ul>
                <div class="footer">
                    <p class="copyright">Brought to You By<a href="https://nyamondoprox.simdif.com/">&nbsp;&nbsp;&nbsp;&nbsp;nyamondo </a>©</p>

                </div>
                </div>
            </aside>
