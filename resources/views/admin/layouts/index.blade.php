
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <title>Rupom Ehsan Dashbord</title>

  <!-- Favicons -->
  <link href="{{asset('admin')}}/img/fabicon.png" rel="icon">
  <link href="{{asset('admin')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('admin')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('admin')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="{{asset('admin')}}/css/style.css" rel="stylesheet">
  <link href="{{asset('admin')}}/css/style-responsive.css" rel="stylesheet">
  <script src="{{asset('admin')}}/lib/chart-master/Chart.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    /* Dropdown Button */
.dropbtn {
  color: white;
  padding: 5px;
  font-size: 16px;
  border: 1px solid rgba(255, 255, 255, 0.418);
  background: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 260px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #0a160b;}
  </style>
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
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <div class="dropdown">
            <button class="dropbtn"> <i class="fa fa-tasks"></i></button>
            <span _ngcontent-lgt-c89="" class="heartbit" style="margin-top: 5px;"></span>
          <span class="badge bg-theme">5</span>
            <div class="dropdown-content">
              <a href="#"><div class="notify-arrow notify-arrow-green"></div>
                <li>
                  <p class="green">You have 4 pending tasks</p>
                </li></a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">  <i class="fa fa-envelope-o"></i></button>
            <span _ngcontent-lgt-c89="" class="heartbit" style="margin-top: 5px;"></span>
          <span class="badge bg-theme" id="countmsg">0</span>
            <div class="dropdown-content">
              <a href="#" class="bg-warning"><div class="notify-arrow notify-arrow-green"></div>
                <li>
                  <p class="green" id="pendingmsg">You have 0 pending tasks</p>
                </li></a>
                <div id="message">
                  <a href="#">
                    <li>
                        <span class="from">1:-</span>
                        <span class="from">Name:rupom ehsan</span>
                        <span class="time">time:</span>
                        <span class="message">massage:My name’s Eri...</span>
                    </li>
                  </a>
                </div>
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">   <i class="fa fa-bell-o"></i></i></button>
            <span _ngcontent-lgt-c89="" class="heartbit" style="margin-top: 5px;"></span>
          <span class="badge bg-theme" id="donercount">0</span>
            <div class="dropdown-content">
              <a href="#"><div class="notify-arrow notify-arrow-green"></div>
                <li>
                  <p class="green" id="pendingnotification">You have 0 Seen Notification</p>
                </li></a>
                <div id="register">
                   <a href="#">
                    <li>
                      <span class="from">1:-</span>
                      <span class="from">Name:rupom ehsan</span>
                      <span class="time">time:</span>
                  </li>
                   </a>
                </div>
            </div>
          </div>
        
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>


  
     <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a href="{{url('backend/logout')}}"class="logout">Logout</a></li>
        </ul>
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
        
        </ul>
      </div>

    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************-->
    @include('admin.partial.sidebar')
    @yield('content')
     <!--footer start-->
 <div class="col-md-12">
   

    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Rupom Ehsan</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
 </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('admin')}}/lib/jquery/jquery.min.js"></sc ript>
  <script src="{{asset('admin')}}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="{{asset('admin')}}/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="{{asset('admin')}}/lib/jquery.scrollTo.min.js"></script>
  <script src="{{asset('admin')}}/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="{{asset('admin')}}/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="{{asset('admin')}}/lib/common-scripts.js"></script>
  <script type="text/javascript" src="{{asset('admin')}}/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="{{asset('admin')}}/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="{{asset('admin')}}/lib/sparkline-chart.js"></script>
  <script src="{{asset('admin')}}/lib/zabuto_calendar.js"></script>
  
<!--   <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Rupom Ehsan!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: '../images/profile.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script> -->
   @yield('custom_js')
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

  <script>
      $.ajax({
            method : 'get',
            url    : '{{route("api.get-message")}}',
            datatype: 'json',
            success:function(res){
              console.log(res)
              if(res.contactmsg){
                $('#message').empty()
                $('#countmsg').empty()
                $('#countmsg').append(res.msgcount)
                $('#pendingmsg').empty()
                $('#pendingmsg').append(`You have ${res.msgcount} pending Message`)
                res.contactmsg.forEach(function(item){
                  $('#message').append(`
                    <a href="javascript:void(0)" onclick="seenmsg(${item.id})">
                      <li>
                          <span class="from">${item.id}:-</span>
                          <span class="from"> Name : ${item.first_name} ${item.last_name}</span>
                          <span class="time"> - Time : ${item.created_at}</span>
                          <span class="message">Message : ${item.opinion}</span>
                      </li>
                    </a>
                  `)
                })
              }
                // $('#site_logo').removeAttr('src')
                // $('#site_logo').attr('src','{{asset('')}}'+ data.site_logo)
            }
        })
  </script>
  <script>
    function seenmsg(id){
      console.log(id)
      $.ajax({
            method : 'post',
            url    : '{{url('api/seen-message')}}/'+ id,
            datatype: 'json',
            success:function(res){
              console.log(res)
            },
            error :function(err){
              console.log(err)
            }
        })
    }
  </script>

<script>
  $.ajax({
        method : 'get',
        url    : '{{route("api.get-doner")}}',
        datatype: 'json',
        success:function(res){
          console.log(res)
          if(res.getdoner){
            $('#register').empty()
            $('#donercount').empty()
            $('#donercount').append(res.donercount)
            $('#pendingnotification').empty()
            $('#pendingnotification').append(`You have ${res.donercount} pending Message`)
            res.getdoner.forEach(function(item){
              $('#register').append(`
                <a href="javascript:void(0)" onclick="seendoner(${item.id})">
                  <li>
                      <span class="from">${item.id}:-</span>
                      <span class="from"> Name : ${item.name}</span>
                      <span class="time"> - Time : ${item.created_at}</span>
                  </li>
                </a>
              `)
            })
          }
            // $('#site_logo').removeAttr('src')
            // $('#site_logo').attr('src','{{asset('')}}'+ data.site_logo)
        }
    })
</script>

<script>
  function seendoner(id){
    console.log(id)
    $.ajax({
          method : 'post',
          url    : '{{url('api/seen-doner')}}/'+ id,
          datatype: 'json',
          success:function(res){
            console.log(res)
          },
          error :function(err){
            console.log(err)
          }
      })
  }
</script>
 
</body>

</html>
