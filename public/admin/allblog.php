<?php
 include('includes/header.php');
  session::checksession();
 include('includes/sidebar.php');

?>

<?php

$user= new blog();

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
	<div class="col-md-2"> </div>
          <div class="col-md-10">
            <div class="content-panel">
                

              <h4><i class="fa fa-angle-right"></i>All Posted informasion</h4><hr>
                 <form method="GET" action="#">
                          <input type="text" name="search" placeholder="Search....." >
                          <button type="submit"><i class="fa fa-search"></i></button>
                   </form>

                     <div class="scrolsec" style="overflow-x:auto; overflow: scroll;height: 550px;">      
                      <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                  	<th> id</th>
                    <th>post title</th>
                    <th>post subtile</th>
                    <th>post descripsion</th>
                    <th>Post time</th>
                    <th>post image</th>

                  </tr>
                </thead>
                <tbody>
                  <?php

                    $i=0;
                    foreach ($user->readAll('blog_table') as $key => $value) {
                    $i++;
                    ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $value['blog_title'];?></td>
                    <td><?php echo $value['blog_subtitle'];?></td>
                   
                       <td><div class="btn-group-msg"><?php echo strlen($value['blog_des'])>50?substr($value['blog_des'],0,50)."...":$value['blog_des'] ?></div></td>
                    <td><?php echo $value['post_time'];?></td>
                    <td><img src="uploads/<?php echo $value['blog_image'];?>" height="50" width="100"></td>
                    <td>
                       <div class="btn-group-btn">
                          <div class="btn-group">
                          <button class="btn-one"><?php echo "<a href='view-post.php?action=view&id=".$value['blog_id']."'></>"; ?><i class="fa fa-plus-circle" aria-hidden="true"></i></a></button>
                          <button class="btn-two"><?php echo "<a href='edit-post.php?action=update&id=".$value['blog_id']."'></>"; ?><i class="fa fa-check"></i></a></button>
                          <button class="btn-three"><?php echo "<a href='allblog.php?action=delete&id=".$value['blog_id']."' onclick ='return confirm(\"are you want to delete data\")'></>"; ?><i class="fa fa-trash-o "></i></a></button>
                        </div>
                     </div>
                 
                 
                  
                  
                    </td>
                  </tr>
                  <?php } ?>





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
