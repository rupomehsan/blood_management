<?php

include 'classes/user.php';
$user=new user();

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])){
   $userLogin=$user->userLogin($_POST);
 }
include_once $filepath.'/../classes/Session.php';

?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <title>Rupom Ehsan Dashbord</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
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


   <form  class="login-form" role="form" method="post" style="padding:200px 350px;">
        <?php

        if (isset($userLogin)) {
           echo $userLogin;
        }

        ?>

        <div style="height: 80px;width: 100%;" class="input-group">
            <span class="">Username: </span>

            <input  type="text" class="form-control" name="username" value="" placeholder="username ">                                        
        </div>

        <div style="height: 80px;width: 100%;" class="input-group">
            <span class="">Password: </span>
            <input id="login-password" type="password" class="form-control" name="password" placeholder="password" >
        </div>
         <div class="col-sm-12 controls">
             <input type="submit" name="login" value="login"/>    
              <input type="reset" value="Clear"/>
         
            </div>                                            
  </form>  

</body>

