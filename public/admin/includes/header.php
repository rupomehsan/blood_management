<?php 

$filepath= realpath(dirname(__FILE__));
include_once $filepath.'/../classes/Session.php';
session::init();

session::checksession();

$filepath= realpath(dirname(__FILE__));
include_once $filepath.'/../classes/user.php';
$filepath= realpath(dirname(__FILE__));
include_once $filepath.'/../classes/student.php';
$filepath= realpath(dirname(__FILE__));
include_once $filepath.'/../classes/blog.php';

if (isset($_GET ['action']) && $_GET['action']=="logout") {
    session::destroy();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <title>Rupom Ehsan Dashbord</title>

  <!-- Favicons -->
  <link href="img/fabicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->


    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>rupom<span>ehsan</span></b></a>
                <?php 
     
                     $id= session::get("id");
                     $userlogin =session::get("login");
                      if($userlogin == true){

                    ?>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
                <span _ngcontent-lgt-c89="" class="heartbit" style="margin-top: 5px;"></span>
               <!--  <span _ngcontent-lgt-c89="" class="point"></span> -->
               <span class="badge bg-theme">4</span>

              </a>

            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle">
              <i class="fa fa-envelope-o"></i>
                <span _ngcontent-lgt-c89="" class="heartbit" style="margin-top: 5px;"></span>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
 
              <?php
               if (isset($_GET ['action']) && $_GET ['action'] == 'view') {
                $id=(int)$_GET ['id']; 
                   }
                
                  $user= new user();
                  $i=0;
                  foreach ($user->readAllmsg() as $key => $value) {
                  $i++;

                  ?>

              
                 <li>
              
                <!--   <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span> -->
                  <!-- <span class="subject"> -->
                  <td><?php echo $i;?>:</td>
                  <span class="from"><?php echo $value['user_firstname'];?>:</span>
                  <span class="time"><?php echo $value['post_time'];?>.</span>
                  </span>
                  <span class="message">massage:<?php echo strlen($value['user_massage'])>15?substr($value['user_massage'],0,15)."...":$value['user_massage'] ?></span>
                 
                  <button class="btn-one"> <?php echo "<a href='view-massage.php?action=view&id=".$value['user_id']."'></>"; ?>view</a></a></button>
              </li>

            <?php } ?>


              <li class="sebtn">
                <a href="user-massage.php" >See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span _ngcontent-lgt-c89="" class="heartbit" style="margin-top: 5px;"></span>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>


  
     <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="?action=logout">Logout</a></li>
        </ul>
      </div>
     
       <?php }else{ ?>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
        
        </ul>
      </div>
      <?php }?>

    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************-->