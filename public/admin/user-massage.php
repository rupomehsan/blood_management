<?php
 include('includes/header.php');
  session::checksession();
 include('includes/sidebar.php');
 spl_autoload_register(function($class){
     include "classes/".$class.".php";
 });
 ?>
 <?php
$user= new user();

if (isset($_GET ['action']) && $_GET ['action'] == 'view') {
      $id=(int)$_GET ['id']; 
  }
if (isset($_GET ['action']) && $_GET ['action'] == 'delete') {
      $id=(int)$_GET ['id'];
       $result=$user->delete($id);
  }

  ?>

<div class="row pt-50">
	<div class="col-md-2"></div>
          <div class="col-md-10 msg-table">
            <div class="content-panel">
            
              <h4><i class="fa fa-angle-right"></i>All USER MASSAGE</h4><hr>
                 <form method="GET" action="serch-result.php">
                          <input type="text" name="search" placeholder="Search....." >
                          <button type="submit"><i class="fa fa-search"></i></button>
                   </form>

                     <div class="scrolsec" style="overflow-x:auto;height: 550px;">      
                      <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                  	 <th>id</th>
                    <th class="firstname">first Name</th>
                    <th class="firstname">last Name</th>
                    <th>Phone</th>
                    <th> Email</th>
                    <th>Massage</th>
                    <th>Post time</th>
                     <th>Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  foreach ($user->readAll() as $key => $value) {
                  $i++;

                  ?>
                  <tr>
                  	<td><?php echo $i;?></td>
                    <td><?php echo $value['user_firstname'];?></td>
                    <td><?php echo $value['user_lastname'];?></td>
                    <td><?php echo $value['user_phone'];?></td>
                    <td><?php echo $value['user_email'];?></td>
                    <td><div class="btn-group-msg"><?php echo strlen($value['user_massage'])>50?substr($value['user_massage'],0,50)."...":$value['user_massage'] ?></div></td>
                    <td><?php echo $value['post_time'];?></td>
                    <td>
                      <div class="btn-group-btn">
                        <div class="btn-group">
                           <button><?php echo "<a href='view-massage.php?action=view&id=".$value['user_id']."'></>"; ?><i class="fa fa-plus-circle" aria-hidden="true"></i></a></button>
                            <button><?php echo "<a href='reply-massage.php?action=reply&id=".$value['user_id']."'></>"; ?>RPL</a></button>
                       
                    <!--   <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button> -->
                        <button><?php echo "<a href='user-massage.php?action=delete&id=".$value['user_id']."' onclick ='return confirm(\"are you want to delete data\")'></>"; ?><i class="fa fa-trash-o "></i></a></button>

                        
                    </td>
                     </div>
                     </div>
                  </tr>
                   <?php  }?>

                </tbody>
              </table>
              <div class="demo">
      			    <nav class="pagination-outer" aria-label="Page navigation">
      			        <ul class="pagination">
      			            <li class="page-item">
      			                <a href="#" class="page-link" aria-label="Previous">
      			                    <span aria-hidden="true">«</span>
      			                </a>
      			            </li>
      			            <li class="page-item"><a class="page-link" href="#">1</a></li>
      			            <li class="page-item"><a class="page-link" href="#">2</a></li>
      			            <li class="page-item active"><a class="page-link" href="#">3</a></li>
      			            <li class="page-item"><a class="page-link" href="#">4</a></li>
      			            <li class="page-item"><a class="page-link" href="#">5</a></li>
      			            <li class="page-item">
      			                <a href="#" class="page-link" aria-label="Next">
      			                    <span aria-hidden="true">»</span>
      			                </a>
      			            </li>
      			        </ul>
      			    </nav>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>




 <?php
 include('includes/footer.php');
 ?>
