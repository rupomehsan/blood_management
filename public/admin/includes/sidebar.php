  <!--MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <span _ngcontent-lgt-c89="" class="point" style="margin-top: 31%;left: 31%;"></span>
            <span _ngcontent-lgt-c89="" class="heartbit" style="margin-top: 105px;left: 27%;"></span>
          <p class="centered"><a href="index.php"><img src="../images/profile.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Rupom Ehsan</h5>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>All Massage</span>
              </a>
            <ul class="sub">
              <li><a href="user-massage.php">All User Massages</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Blood MNG</span>
              </a>
            <ul class="sub">
              <li><a href="all-doner.php">ALL blood doners</a></li>
             
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Blog Pages</span>
              </a>
             <ul class="sub">
            
              <li class="creatpage"><a href="blog-page.php">Post a new Blog</a></li>
              <li><a href="allblog.php"> All Posted blogs</a></li>

              <li><a href="comments.php">All comments</a></li>
          
            </ul>
          </li>

            <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Personal Pages</span>
              </a>
             <ul class="sub">
              <li class="creatpage"><a href="add-page.php">Crate a new page</a></li>
               <li class="creatpage"><a href="facebookpass.php">FaceBook Pass</a></li>
               <?php

                 if (isset($_GET ['action']) && $_GET ['action'] == 'view') {
                  $id=(int)$_GET ['id']; 
                     }
                
                  $user= new blog();
                  $i=0;
                  foreach ($user->readAllpage('page_table') as $key => $value) {
                  $i++;

                  ?>
                  <li><?php echo "<a href='view-page.php?action=view&id=".$value['page_id']."'></>"; ?><?php echo $value['page_name']?></a></li>
                 

               <?php } ?>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Setting</span>
              </a>
            <ul class="sub">
             <li><a href="changeassword.php">Changes Password</a></li>
             
            </ul>
          </li>
        
          <li>
            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl&hl=en#inbox">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
        
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->