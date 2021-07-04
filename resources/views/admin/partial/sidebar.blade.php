  <!--MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <span _ngcontent-lgt-c89="" class="point" style="margin-top: 31%;left: 31%;"></span>
              <span _ngcontent-lgt-c89="" class="heartbit" style="margin-top: 105px;left: 27%;"></span>
            <p class="centered"><a href=""><img src="{{asset('client')}}/images/profile.jpg" class="img-circle" width="80"></a></p>
            <h5 class="centered">Rupom Ehsan</h5>
            <li class="mt">
              <a class="active" href="{{route('dashboard.home')}}">
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
                <li><a href="{{route('user-messeges.index')}}">All User Massages</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-cogs"></i>
                <span>Blood MNG</span>
                </a>
              <ul class="sub">
                <li><a href="{{route('all-doners.index')}}">ALL blood doners</a></li>
               
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-book"></i>
                <span>Blog Pages</span>
                </a>
               <ul class="sub">
              
                <li class="creatpage"><a href="{{route('blogs.create')}}">Post a new Blog</a></li>
                <li><a href="{{route('blogs.index')}}"> All Posted blogs</a></li>
  
                <li><a href="{{route('comments.index')}}">All comments</a></li>
            
              </ul>
            </li>
  
              <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-book"></i>
                <span>Personal Pages</span>
                </a>
               <ul class="sub">
            
                <li class="creatpage"><a href="{{route('mypages.create')}}">Crate a new page</a></li>
                <li class="creatpage"><a href="{{route('mypages.index')}}">All Pages</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-tasks"></i>
                <span>Setting</span>
                </a>
              <ul class="sub">
               <li><a href="{{route('settings.index')}}">Changes Password</a></li>
               
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