<?php
 include('includes/header.php');
 session::checksession();
 include('includes/sidebar.php');
 spl_autoload_register(function($class){
     include "classes/".$class.".php";
 });
?>
<?php

$user= new student();


if (isset($_GET ['action']) && $_GET ['action'] == 'view') {
    $id=(int)$_GET ['id'];

}


if (isset($_GET ['action']) && $_GET ['action'] == 'delete') {
    $id=(int)$_GET ['id'];
     if ($user->delete($id)) {
          echo "<span style='color:green;font-size:20px;margin-left:10%;margin-top:10%;'>delete successfully done </span>";
      }

}


?>
<div class="row pt-50">
	<div class="col-md-2">

  </div>
          <div class="col-md-10">
            <div class="content-panel">


              <h4><i class="fa fa-angle-right"></i>All blood doner informasion</h4><hr><table class="table table-striped table-advance table-hover">

                <div class="col-md-4 mb-20">
                <form method="GET" action="serch-result.php">
                          <input type="text" name="search" placeholder="Search....." >
                          <button type="submit"><i class="fa fa-search"></i></button>
                   </form>
                </div>
                <thead>
                  <tr>
                  	 <th> id</th>
                    <th> Name</th>
                    <th>Phone</th>
                    <th> Email</th>
                    <th> address</th>
                    <th>social link</th>
                    <th> division</th>
                    <th>blood group</th>
                    <th> donate (stts)</th>
                    <th>Gender</th>
                    <th>Images</th>
                    <th>status</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                      if (isset($_GET ['search'])) {
                      $search=$_GET ['search']; 
                      $user->setsearch($search);
                      
                        }
                  $i=0;
                  foreach ($user->searchall('doner_table') as $key => $value) {
                  $i++;

                  ?>

                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $value['user_name'];?></td>
                    <td><?php echo $value['user_phone'];?></td>
                    <td><?php echo $value['user_email'];?></td>
                    <td><?php echo $value['user_address'];?></td>
                    <td><?php echo $value['user_social'];?></td>
                    <td><?php echo $value['user_blood'];?></td>
                    <td><?php echo $value['user_division'];?></td>
                    <td><?php echo $value['user_status'];?></td>
                    <td><?php echo $value['user_gender'];?></td>
                    <td><img src="uploads/<?php echo $value['user_image'];?>" height="50" width="100"></td>
                    <td>
                       <div class="btn-group-btn">
                          <div class="btn-group">
                          <button class="btn-one"><?php echo "<a href='view-user.php?action=view&id=".$value['user_id']."'></>"; ?><i class="fa fa-plus-circle" aria-hidden="true"></i></a></button>
                          <button class="btn-two"><?php echo "<a href='edit-user.php?action=update&id=".$value['user_id']."'></>"; ?><i class="fa fa-check"></i></a></button>
                          <button class="btn-three"><?php echo "<a href='all-doner.php?action=delete&id=".$value['user_id']."' onclick ='return confirm(\"are you want to delete data\")'></>"; ?><i class="fa fa-trash-o "></i></a></button>
                        </div>
                     </div>
                 
                 
                  
                  
                    </td>
                  </tr>

                <?php } ?>
                                        
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
